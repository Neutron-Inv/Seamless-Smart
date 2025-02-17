<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure PDF Viewer</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.14.305/pdf.min.js"></script>
    
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
        }

        /* Canvas */
        canvas {
            width: 100%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

    </style>
</head>
<body oncontextmenu="return false;" onkeydown="return disableKeys(event)">

    <!-- Header with Logo and Title -->
    <div class="header flex gap-4 md:gap-10">
        <img src="{{ url('storage/images/logo.png') }}" alt="Seamless Smart" class="h-16"> 
        <span class="font-raleway text-right md:text-center text-md md:text-3xl">Seamless Verification System</span>
    </div>

    <!-- PDF Viewer -->
    <div class="pdf-container">
        <canvas id="pdf-viewer"></canvas>
    </div>

    <div class="space-y-2">
        <div class="flex justify-center items-center bg-white p-4 rounded-lg shadow-md">
          <span class="text-sm text-gray-600">Survey Title:</span>
          <span class="text-sm text-gray-900 font-medium">{{$project->name}}</span>
        </div>
        <div class="flex justify-center items-center bg-gray-50 p-4 rounded-lg shadow-md">
          <span class="text-sm text-gray-600">Address:</span>
          <span class="text-sm text-gray-900 font-medium">{{$project->address}}</span>
        </div>
        <div class="flex justify-center items-center bg-white p-4 rounded-lg shadow-md">
          <span class="text-sm text-gray-600">Registered by:</span>
          <span class="text-sm text-gray-900 font-medium">{{$project->registered_by}}</span>
        </div>
        <div class="flex justify-center items-center bg-gray-50 p-4 rounded-lg shadow-md">
          <span class="text-sm text-gray-600">Area:</span>
          <span class="text-sm text-gray-900 font-medium">{{$project->area .' '.$project->unit}}</span>
        </div>
        <div class="flex justify-center items-center bg-white p-4 rounded-lg shadow-md">
          <span class="text-sm text-gray-600">Status:</span>
          <span class="text-sm text-gray-900 font-medium">{{$project->status}}</span>
        </div>
        <div class="flex justify-center items-center bg-white p-4 rounded-lg shadow-md">
            <span class="text-sm text-gray-600">Date Registered:</span>
            <span class="text-sm text-gray-900 font-medium">{{$project->date_registered}}</span>
          </div>
      </div>
      
    <script>
        const pdfUrl = "{{ url('storage/'.$project->plan_file) }}"; // Dynamic PDF URL

        pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
            pdf.getPage(1).then(page => {
                const canvas = document.getElementById('pdf-viewer');
                const context = canvas.getContext('2d');
                const viewport = page.getViewport({ scale: 1 });

                canvas.width = viewport.width;
                canvas.height = viewport.height;

                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                page.render(renderContext);
            });
        });

        function disableKeys(e) {
            if (e.key === "PrintScreen" || e.keyCode === 44) {
                alert("Screenshots are not allowed!");
                return false;
            }
        }
    </script>

</body>
</html>
