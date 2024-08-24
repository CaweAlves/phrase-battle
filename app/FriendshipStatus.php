<?php

namespace App;

enum FriendshipStatus: string
{
    case Pending = 'pending';
    case Accept  = 'accept';

    public function getMessage(): string
    {
        return match ($this) {
            self::Pending => "Solicitação de amizade pendente.",
            self::Accept  => "Solicitação de amizade aceita."
        };
    }

    public function getColors(): string
    {
        return match ($this) {
            self::Pending => 'bg-yellow-500 text-amber-700',
            self::Accept  => 'bg-sky-500 text-blue-700'
        };
    }

}
