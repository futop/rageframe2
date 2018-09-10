<?php
namespace common\helpers;

/**
 * 正则匹配验证
 *
 * Class RegularHelper
 * @package common\helpers
 */
class RegularHelper
{
    /**
     * 验证
     *
     * @param string $type 方法类型
     * @param string $value 值
     * @return false|int
     */
    public static function verify($type, string $value)
    {
        return preg_match(self::$type, $value);
    }

    /**
     * 手机号码正则
     *
     * @return string
     */
    public static function mobile()
    {
        return '^[1][3456789][0-9]{9}$';
    }

    /**
     * 邮箱正则
     *
     * @return string
     */
    public static function email()
    {
        return '^\w+[-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$';
    }

    /**
     * 电话正则
     * 格式为：XXXX-XXXXXXX，XXXX-XXXXXXXX，XXX-XXXXXXX，XXX-XXXXXXXX，XXXXXXX，XXXXXXXX
     *
     * @return string
     */
    public static function telephone()
    {
        return '^(\(\d{3,4}\)|\d{3,4}-)?\d{7,8}$';
    }

    /**
     * 身份证正则
     *
     * @return string
     */
    public static function identityCard()
    {
        return '^\d{15}|\d{}18$';
    }

    /**
     * 密码正则
     * 密码以字母开头，长度在6-18之间，只能包含字符、数字和下划线
     *
     * @return string
     */
    public static function password()
    {
        return '^[a-zA-Z]\w{5,17}$';
    }

    /**
     * 验证是否是url
     *
     * @return string
     */
    public static function url()
    {
        return '(http|ftp|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&:/~\+#]*[\w\-\@?^=%&/~\+#])?';
    }
}