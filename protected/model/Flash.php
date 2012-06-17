<?php

class Flash
{
  const format = '<div class="flash"">%s</div>';

  public static function add($msg)
  {
     $session = Doo::session(Doo::conf()->session_name);
     $session->flash .= sprintf(self::format, $msg);
  }

  public static function dump()
  {
     $session = Doo::session(Doo::conf()->session_name);
     $out = $session->flash;
     $session->flash = '';
     return $out;
  }
}