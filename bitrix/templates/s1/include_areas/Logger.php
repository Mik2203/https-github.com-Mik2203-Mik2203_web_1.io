<?php

/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 05.09.2017
 * Time: 9:11
 */

//include ("Logger.php");
//include ('index.html');
//use Logger;

class Logger
{
    //статические переменные
    const FILE_PATH = "log.txt";
    public static $PATH;
    protected static $loggers = array();

    protected $name;
    protected $file;
    protected $fp;


    public function __construct($name, $file = null)
    {
        $this->name = $name;
        $this->file = $file;
        $this->open();
    }

    public function open()
    {
        if (self::$PATH == null)
        {
            return;
        }
        else
        {
            $this->fp = fopen($this->file == null ? self::$PATH . '/' . $this->name . '.txt' : self::$PATH . '/' . $this->file, 'w+');
        }

    }

    public static function getLogger($name = 'root', $file = null)
    {
        if (!isset(self::$loggers[$name])) {
            self::$loggers[$name] = new Logger($name, $file);
        }

        return self::$loggers[$name];
    }



    public function log($message)
    {
        if (!is_string($message)) {
            // вывести массив
            $this->logPrint($message);
            return;
        }

        $log = '';
        // зафиксируем дату и время происходящего
        $log .= '[' . date('D M d H:i:s Y', time()) . '] ';
        // если мы отправили в функцию больше одного параметра,
        // выведем их тоже
        if (func_num_args() > 1) {
            $params = func_get_args();

            $message = call_user_func_array('sprintf', $params);
        }

        $fp = fopen($this->file == null ? self::$PATH . '/' . $this->name . '.txt' : self::$PATH . '/' . $this->file, 'w+');

        $log .= $message;
        $log .= "\n";
        // запись в файл
        fwrite($fp, $log);

        if ( !file_exists( "roooo.txt" ) )
        { // если файл НЕ существует
            $fp = fopen ("roooo.txt", "w+");
            fwrite($fp, $log);
            fclose($fp);
        }
        else
        {
            echo 'Увы, файл уже существует.';
        }
    }

    protected function _write($string)
    {

        fwrite($this->fp, $string);

    }

    public function logPrint($obj)
    {
        // заносим все выводимые данные в буфер
        ob_start();

        print_r($obj);
        // очищаем буфер
        $ob = ob_get_clean();

        // записываем
        $this->log($ob);
    }

    // деструктор
    public function __destruct()
    {
        fclose($this->fp);
    }

//    function _log($var, $clear=FALSE, $path=NULL) {
//        if ($var)
//        {
//            $date = '====== '.date('Y-m-d H:i:s')." =====\n";
//            $result = $var;
//            if (is_array($var) || is_object($var)) {
//                $result = print_r($var, 1);
//            }
//            $result .= "\n";
//            if(!$path)
//                $path = dirname($_SERVER['SCRIPT_FILENAME']) .'/mylog.txt';
//            if($clear)
//                file_put_contents($path, '');
//            @error_log($date.$result, 3, $path);
//            return true;
//        }
//        return false;
//    }

}

//$my_array = '1,2,3';
//
////error_log('Текст для лога', 3, dirname($_SERVER['SCRIPT_FILENAME']).'/mylog.log');
//error_log(print_r($my_array,1), 3, dirname($_SERVER['SCRIPT_FILENAME']).'/mylog.log');
//
//function _log($var, $clear=FALSE, $path=NULL)
//{
//    if ($var)
//    {
//        $date = '====== '.date('Y-m-d H:i:s')." =====\n";
//        $result = $var;
//        if (is_array($var) || is_object($var))
//        {
//            $result = print_r($var, 1);
//        }
//        $result .="\n";
//        if(!$path)
//            $path = dirname($_SERVER['SCRIPT_FILENAME']) . '/mylog.txt';
//        if($clear)
//            file_put_contents($path, '');
//        @error_log($date.$result, 3, $path);
//        return true;
//    }
//    return false;
//}

//Logger::getLogger($name)->log($data);
Logger::$PATH = dirname(__FILE__);


//$text = '111211';
//
//if ( !file_exists( "roooo.txt" ) )
//{ // если файл НЕ существует
//    $fp = fopen ("roooo.txt", "w+");
//    fwrite($fp, $text);
//    fclose($fp);
//}
//else
//{
//    echo 'Увы, файл уже существует.';
//}
?>

