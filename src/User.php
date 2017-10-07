<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/10/7
 * Time: 下午3:14
 */

namespace rayful\Tool\HR;

use rayful\Tool\objectTool;


/**
 * Class HRUser
 * @package rayful\Tool
 */
class User
{
    use objectTool;

    /**
     * 真实姓名
     * @var string
     */
    public $truename;

    /**
     * 性别
     * @var string
     */
    public $gender;

    /**
     * 职位
     * @var string
     */
    public $position;

    /**
     * 工号
     * @var string
     */
    public $no;

    /**
     * 所属部门（多个）
     * @var array
     */
    public $departments;

    /**
     * HR系统里面的权限，分为：ROLE_SUPER_ADMIN（超级管理员）、ROLE_ADMIN（管理员）、ROLE_USER（普通可登录用户）
     * @var string
     */
    public $role;

    /**
     * 电子邮箱
     * @var string
     */
    public $email;

    /**
     * 姓名拼音
     * @var string
     */
    public $pinYin;

    /**
     * 手机号码
     * @var string
     */
    public $mobile;

    /**
     * 是否在职
     * @var int
     */
    public $onDuty;

    /**
     * 入职时间
     * @var string
     */
    public $onDate;

    /**
     * 离职时间
     * @var string
     */
    public $offDate;

    /**
     * 编制类型（劳动合同、实习、兼职）
     * @var string
     */
    public $type;

    /**
     * 签约公司
     * @var string
     */
    public $contractCompany;

    /**
     * 工资卡号（工资系统要用到）
     * @var string
     */
    public $salaryCardNum;

    /**
     * 备注
     * @var string
     */
    public $memo;
}