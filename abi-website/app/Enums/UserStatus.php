<?php

namespace App\Enums;

/**
 * Freischaltungs-Status eines Benutzers (Registrierung -> Admin-Freigabe).
 * Wird erst mit der späteren Authentifizierung aktiv genutzt.
 */
enum UserStatus: string
{
    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';
}
