<?php

namespace App\Filament\Resources\HomepageSettingResource\Pages;

use App\Filament\Resources\HomepageSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Redirect; // Import Redirect facade

class CreateHomepageSetting extends CreateRecord
{
    protected static string $resource = HomepageSettingResource::class;

     // Override afterSave untuk mengalihkan setelah data disimpan
     protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
