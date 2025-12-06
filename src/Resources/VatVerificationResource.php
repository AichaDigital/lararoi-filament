<?php

declare(strict_types=1);

namespace AichaDigital\LararoiFilament\Resources;

use Aichadigital\Lararoi\Models\VatVerification;
use AichaDigital\LararoiFilament\Resources\VatVerificationResource\Pages;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class VatVerificationResource extends Resource
{
    protected static ?string $model = VatVerification::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-shield-check';

    protected static string|\UnitEnum|null $navigationGroup = 'VAT';

    protected static ?int $navigationSort = 1;

    public static function getNavigationLabel(): string
    {
        return __('lararoi-filament::resources.vat_verification.navigation_label');
    }

    public static function getModelLabel(): string
    {
        return __('lararoi-filament::resources.vat_verification.model_label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('lararoi-filament::resources.vat_verification.plural_model_label');
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit($record): bool
    {
        return false;
    }

    public static function canDelete($record): bool
    {
        return false;
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('lararoi-filament::resources.vat_verification.sections.vat_info'))
                    ->schema([
                        TextEntry::make('vat_code')
                            ->label(__('lararoi-filament::resources.vat_verification.fields.vat_code'))
                            ->copyable(),

                        TextEntry::make('country_code')
                            ->label(__('lararoi-filament::resources.vat_verification.fields.country_code')),

                        TextEntry::make('is_valid')
                            ->label(__('lararoi-filament::resources.vat_verification.fields.is_valid'))
                            ->badge()
                            ->color(fn (bool $state): string => $state ? 'success' : 'danger')
                            ->formatStateUsing(fn (bool $state): string => $state
                                ? __('lararoi-filament::resources.vat_verification.values.valid')
                                : __('lararoi-filament::resources.vat_verification.values.invalid')
                            ),

                        TextEntry::make('verified_at')
                            ->label(__('lararoi-filament::resources.vat_verification.fields.verified_at'))
                            ->dateTime(),
                    ])
                    ->columns(2),

                Section::make(__('lararoi-filament::resources.vat_verification.sections.company_info'))
                    ->schema([
                        TextEntry::make('company_name')
                            ->label(__('lararoi-filament::resources.vat_verification.fields.company_name'))
                            ->default('-'),

                        TextEntry::make('company_address')
                            ->label(__('lararoi-filament::resources.vat_verification.fields.company_address'))
                            ->default('-')
                            ->columnSpanFull(),
                    ])
                    ->columns(1),

                Section::make(__('lararoi-filament::resources.vat_verification.sections.api_info'))
                    ->schema([
                        TextEntry::make('api_source')
                            ->label(__('lararoi-filament::resources.vat_verification.fields.api_source'))
                            ->badge(),

                        TextEntry::make('created_at')
                            ->label(__('lararoi-filament::resources.vat_verification.fields.created_at'))
                            ->dateTime(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('vat_code')
                    ->label(__('lararoi-filament::resources.vat_verification.fields.vat_code'))
                    ->searchable()
                    ->sortable()
                    ->copyable(),

                TextColumn::make('country_code')
                    ->label(__('lararoi-filament::resources.vat_verification.fields.country_code'))
                    ->searchable()
                    ->sortable(),

                IconColumn::make('is_valid')
                    ->label(__('lararoi-filament::resources.vat_verification.fields.is_valid'))
                    ->boolean()
                    ->sortable(),

                TextColumn::make('company_name')
                    ->label(__('lararoi-filament::resources.vat_verification.fields.company_name'))
                    ->searchable()
                    ->limit(30)
                    ->toggleable(),

                TextColumn::make('api_source')
                    ->label(__('lararoi-filament::resources.vat_verification.fields.api_source'))
                    ->badge()
                    ->sortable(),

                TextColumn::make('verified_at')
                    ->label(__('lararoi-filament::resources.vat_verification.fields.verified_at'))
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label(__('lararoi-filament::resources.vat_verification.fields.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('verified_at', 'desc')
            ->filters([
                TernaryFilter::make('is_valid')
                    ->label(__('lararoi-filament::resources.vat_verification.fields.is_valid')),

                SelectFilter::make('country_code')
                    ->label(__('lararoi-filament::resources.vat_verification.fields.country_code'))
                    ->options([
                        'ES' => 'Spain',
                        'DE' => 'Germany',
                        'FR' => 'France',
                        'IT' => 'Italy',
                        'PT' => 'Portugal',
                        'NL' => 'Netherlands',
                        'BE' => 'Belgium',
                        'AT' => 'Austria',
                        'PL' => 'Poland',
                    ]),

                SelectFilter::make('api_source')
                    ->label(__('lararoi-filament::resources.vat_verification.fields.api_source')),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVatVerifications::route('/'),
            'view' => Pages\ViewVatVerification::route('/{record}'),
        ];
    }
}
