<?php namespace Helper;
/**
 * class Helper
 * @package     forehalo/excel-worker
 * @version     1.0.0
 * @copyright   Copyright (c) 2015 forehalo <http://www.forehalo.top>
 * @author      forehalo <forehalo@gmail.com>
 * @license     http://www.gnu.org/licenses/lgpl.html   LGPL
 */
class Helper
{
    function getFormatByExtension($ext)
    {
        switch ($ext) {

            /*
            |--------------------------------------------------------------------------
            | Excel 2007
            |--------------------------------------------------------------------------
            */
            case 'xlsx':
            case 'xlsm':
            case 'xltx':
            case 'xltm':
                return 'Excel2007';
                break;

            /*
            |--------------------------------------------------------------------------
            | Excel5
            |--------------------------------------------------------------------------
            */
            case 'xls':
            case 'xlt':
                return 'Excel5';
                break;

            /*
            |--------------------------------------------------------------------------
            | OOCalc
            |--------------------------------------------------------------------------
            */
            case 'ods':
            case 'ots':
                return 'OOCalc';
                break;

            /*
            |--------------------------------------------------------------------------
            | SYLK
            |--------------------------------------------------------------------------
            */
            case 'slk':
                return 'SYLK';
                break;

            /*
            |--------------------------------------------------------------------------
            | Excel2003XML
            |--------------------------------------------------------------------------
            */
            case 'xml':
                return 'Excel2003XML';
                break;

            /*
            |--------------------------------------------------------------------------
            | Gnumeric
            |--------------------------------------------------------------------------
            */
            case 'gnumeric':
                return 'Gnumeric';
                break;

            /*
            |--------------------------------------------------------------------------
            | HTML
            |--------------------------------------------------------------------------
            */
            case 'htm':
            case 'html':
                return 'HTML';
                break;

            /*
            |--------------------------------------------------------------------------
            | CSV
            |--------------------------------------------------------------------------
            */
            case 'csv':
            case 'txt':
                return 'CSV';
                break;

            /*
            |--------------------------------------------------------------------------
            | PDF
            |--------------------------------------------------------------------------
            */
            case 'pdf':
                return 'PDF';
                break;
        }
    }
}