<?php

namespace App;

class Constants
{
    # STATUS SOFT DELETE BANCO DE DADOS
    public const DELETED     = '1';
    public const NOT_DELETED = '0';

    # STATUS DAS PARTIDAS
    public const NAO_REALIZADA = 'NR';
    public const REALIZADA     = 'R';
    public const ADIADA        = 'A';
    public const CANCELADA     = 'C';

    # SIGLA DE POSIÇÕES DE ARBITRAGEM
    public const REFEREE       = 'R';
    public const UMPIRE        = 'U';
    public const LINE_JUDGE    = 'LJ';
    public const HEAD_LINESMAN = 'HL';
    public const SIDE_JUDGE    = 'SJ';
    public const FIELD_JUDGE   = 'FJ';
    public const BACK_JUDGE    = 'BJ';
    public const DELEGATE      = 'D';
}
