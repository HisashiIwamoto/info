<?php
class FormCheck
{
  public $pattern = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
  public $error;
  public $errors = [
    'name' => '未入力',
    'mail' => '未入力',
    'info' => '未入力',
    'work' => '未選択',
    'gender' => '未選択',
    'accept' => '同意が必要です',
  ];
  public $lengthError;

  /**
   * @param bool
   */
  public function inputCheck($input)
  {
    if ($input == "") {
      return false;
    }
    return true;
  }
  /**
   * @param string
   * @param erroemessage
   */
  public function checkName($input)
  {
    if (!$this->inputCheck($input)) {
      return $this->errors['name'];
    }
  }

  public function checkMail($input)
  {
    if (!$this->inputCheck($input)) {
      return $this->errors['mail'];
    }
  }


  public function checkInfo($input)
  {
    if (!$this->inputCheck($input)) {
      return $this->errors['info'];
    }
  }

  public function checkWork($input)
  {
    if (!$this->inputCheck($input)) {
      return $this->errors['work'];
    }
  }

  public function checkGender($input)
  {
    if (!$this->inputCheck($input)) {
      return $this->errors['gender'];
    }
  }
  function checkAccept($input)
  {
    if (!$this->inputCheck($input)) {
      return $this->errors['accept'];
    }
  }

  /**
   * @param string
   * @param erroemessage
   */
  public function validationCheck($mail)
  {
    if (preg_match($this->pattern, $mail)) {
    } else {
      return  $this->error = "使用できない文字が含まれています";
    }
  }

  /**
   * @param string
   * @param erroemessage
   */
  public function lengthCheck($input, $letterLimit)
  {
    if (mb_strlen($input) > $letterLimit) {
      return $this->lengthError = "文字数を超えています。";
    }
  }
}
