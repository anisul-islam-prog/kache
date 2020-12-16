<?php 
use MyCLabs\Enum\Enum;
/**
 * @method static self USER()
 * @method static self BUSINESS()
 * @method static self ADMIN()
 */
class RoleEnum extends Enum
{
    private const USER = '1';
    private const BUSINESS = '2';
    private const ADMIN = '3';
}
// $role->setRole(RoleEnum::USER());
?>
