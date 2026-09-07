<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;
use Override;

class Users extends Page
{
    protected string $view = 'filament.pages.users';

    protected static ?string $navigationLabel = 'Usuários';

    protected static string | BackedEnum | null $navigationIcon = Heroicon::OutlinedUser;
}
