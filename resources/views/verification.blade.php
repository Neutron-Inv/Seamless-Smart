<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure PDF Viewer</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Disable Right-Click & Text Selection */
        body {
            user-select: none;
            background-color: #f4f4f4;
            text-align: center;
        }

        /* Header Section */
        .header {
            background-color: #93bc32;
            color: #fff;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 1px;
            align-items: center;
            justify-content: center;
        }


        /* PDF Viewer Container */
        .pdf-container {
            max-width: 900px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: auto;
        }

        /* Canvas */
        canvas {
            width: 100%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Loading indicator */
        .loading {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            font-size: 18px;
            color: #666;
        }

        /* Error message */
        .error-message {
            color: #e53e3e;
            padding: 20px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body oncontextmenu="return false;" onkeydown="return disableKeys(event)">

    <!-- Header with Logo and Title -->
    <div class="header flex gap-4 md:gap-10">
        <img src="{{ url('storage/images/logo-light.png') }}" alt="Seamless Smart" class="h-16">
        <span class="font-raleway text-right md:text-center text-md md:text-3xl">Seamless Verification System</span>
    </div>

    <!-- PDF Viewer -->
    <div class="pdf-container">
        <div id="loading" class="loading">Loading PDF...</div>
        <div id="error" class="error-message" style="display: none;"></div>
        <canvas id="pdf-viewer"></canvas>
    </div>

    <div class="space-y-2">
        <div class="flex justify-between md:justify-center items-center bg-white p-4 rounded-lg shadow-md space-x-2">
            <span class="text-sm text-gray-600 font-bold">Survey Title: </span>
            <span class="text-sm text-gray-900 font-medium">{{ $project->name }}</span>
        </div>
        <div class="flex justify-between md:justify-center items-center bg-gray-50 p-4 rounded-lg shadow-md space-x-2">
            <span class="text-sm text-gray-600 font-bold">Address: </span>
            <span class="text-sm text-gray-900 font-medium text-right md:text-center">{{ $project->address }}</span>
        </div>
        <div class="flex justify-between md:justify-center items-center bg-white p-4 rounded-lg shadow-md space-x-2">
            <span class="text-sm text-gray-600 font-bold">Registered by: </span>
            <span class="text-sm text-gray-900 font-medium">{{ $project->registered_by }}</span>
        </div>
        <div class="flex justify-between md:justify-center items-center bg-gray-50 p-4 rounded-lg shadow-md space-x-2">
            <span class="text-sm text-gray-600 font-bold">Area: </span>
            <span class="text-sm text-gray-900 font-medium">{{ $project->area . ' ' . $project->unit }}</span>
        </div>
        <div class="flex justify-between md:justify-center items-center bg-white p-4 rounded-lg shadow-md space-x-2">
            <span class="text-sm text-gray-600 font-bold">Status: </span>
            <span class="text-sm text-gray-900 font-medium">{{ $project->status }}</span>
        </div>
        <div class="flex justify-between md:justify-center items-center bg-white p-4 rounded-lg shadow-md space-x-2">
            <span class="text-sm text-gray-600 font-bold">Date Registered: </span>
            <span class="text-sm text-gray-900 font-medium">{{ $project->date_registered }}</span>
        </div>
    </div>

    <script>
        // Set the worker source path for PDF.js
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

        // Get the PDF URL
        const pdfUrl = "{{ url('storage/' . $project->plan_file) }}";

        // Get DOM elements
        const loadingElement = document.getElementById('loading');
        const errorElement = document.getElementById('error');
        const canvas = document.getElementById('pdf-viewer');
        const context = canvas.getContext('2d');

        // Hide canvas initially
        canvas.style.display = 'none';

        // Function to show error message
        function showError(message) {
            loadingElement.style.display = 'none';
            errorElement.textContent = message;
            errorElement.style.display = 'block';
        }

        // Function to render PDF
        function renderPDF(pdf) {
            // Get the first page
            pdf.getPage(1).then(page => {
                // Calculate scale to fit the container width
                const containerWidth = canvas.parentElement.clientWidth - 40; // Account for padding
                const viewport = page.getViewport({
                    scale: 0.5
                });
                const scale = containerWidth / viewport.width;

                // Create a new viewport with the calculated scale
                const scaledViewport = page.getViewport({
                    scale: scale
                });

                // Set canvas dimensions
                canvas.width = scaledViewport.width;
                canvas.height = scaledViewport.height;

                // Render the page
                const renderContext = {
                    canvasContext: context,
                    viewport: scaledViewport
                };

                // Render the page
                page.render(renderContext).promise.then(() => {
                    // Hide loading and show canvas
                    loadingElement.style.display = 'none';
                    canvas.style.display = 'block';
                }).catch(error => {
                    showError('Error rendering PDF: ' + error.message);
                });
            }).catch(error => {
                showError('Error loading PDF page: ' + error.message);
            });
        }

        // Load the PDF
        if (pdfUrl) {
            pdfjsLib.getDocument(pdfUrl).promise
                .then(pdf => {
                    renderPDF(pdf);
                })
                .catch(error => {
                    showError('Error loading PDF: ' + error.message);
                });
        } else {
            showError('PDF URL is missing');
        }

        function disableKeys(e) {
            if (e.key === "PrintScreen" || e.keyCode === 44) {
                alert("Screenshots are not allowed!");
                return false;
            }
        }
    </script>

    <footer class="w-full bg-gray-900 text-white text-center py-4">
        <p class="text-sm">
            &copy; {{ date('Y') }} Seamless Smart Consult. All rights reserved.
        </p>
        <p class="text-sm mt-1">
            Developed by <a href="https://www.linkedin.com/company/virtual-horizons-ng/"
                class="text-[#93bc32] hover:underline">Virtual Horizons</a>
        </p>
    </footer>

</body>

</html>
