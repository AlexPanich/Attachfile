<?php
/**
 * Part of the Attachfile package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under MIT License.
 *
 * This source file is subject to the MIT License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Attachfile
 * @version    1.0.0
 * @author     AlexPahich
 * @license    MIT
 * @copyright  (c) 2016
 * @link       http://alexpahich.ru
 */
namespace Angrydeer\Attachfile;

use Illuminate\Database\Eloquent\Model;

class IlluminateAttached extends Model
{
    /**
     * {@inheritdoc}
     */
    public $timestamps = false;
    /**
     * {@inheritdoc}
     */
    public $table = 'attached';
}