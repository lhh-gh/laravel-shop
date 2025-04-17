<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: SillyCat
 * Date: 2025-04-17
 * Time: 19:50
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Request 类中完成数据校验
 */
class Request extends FormRequest
{
    public function authorize()
    {
        return true;
    }
}
