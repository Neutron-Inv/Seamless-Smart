<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\DatePicker;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('uuid')
                ->readonly()
                ->default(fn() => (string) Str::uuid()),

            TextInput::make('name')->required(),
            Textarea::make('address')->nullable(),
            TextInput::make('scale')->nullable(),
            TextInput::make('eastings')->nullable(),
            TextInput::make('northings')->nullable(),
            TextInput::make('area')->nullable(),

            Select::make('unit')
                ->options([
                    'meters' => 'Meters',
                    'feet' => 'Feet',
                    'acres' => 'Acres',
                ])
                ->required(),

            TextInput::make('no_pillars')->nullable(),
            TextInput::make('pillar_nos')->nullable(),
            TextInput::make('plan_no')->required(),

            Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                ])
                ->default('pending')
                ->required(),

            DatePicker::make('date_registered')->label('Date Registered')->required(),
            TextInput::make('registered_by')->nullable(),

            // ✅ Hidden QR Code Field
            Hidden::make('qr_code'),

            ViewField::make('qr_code')
                ->label('QR Code')
                ->view('filament.forms.qr_code_view')
                ->visible(fn($record) => !is_null($record)),

            FileUpload::make('plan_file')
                ->label('Upload Plan PDF')
                ->disk('public')
                ->preserveFilenames()
                ->acceptedFileTypes(['application/pdf'])
                ->storeFileNamesIn('plan_file') // Store filename in DB
                ->downloadable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->sortable()->searchable(),
            TextColumn::make('plan_no')->sortable()->searchable(),
            TextColumn::make('status')->sortable(),
            TextColumn::make('date_registered')->sortable(),
            TextColumn::make('registered_by')->sortable(),
            TextColumn::make('qr_code')->label('QR Code')->copyable(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
