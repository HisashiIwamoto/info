<?php
class FormCheck
{
  public $pattern = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
  public $error;
  public $inputText = [
    'name' => '',
    'mail' => '',
    'info' => '',
    'work' => '',
    'gender' => '',
    'accept' => ''
  ];
  public $errors = [
    'name' => '未入力',
    'mail' => '未入力',
    'info' => '未入力',
    'work' => '未選択',
    'gender' => '未選択',
    'accept' => '同意が必要です',
    'mailvalidation' => '使用できない文字が含まれ得ています',
    'lengthError' => '文字制限を超えています'
  ];

  /**
   * @param mixed
   * @return bool
   */
  public function inputCheck($input)
  {
    if ($input == "") {
      return false;
    }
    return true;
  }
  /**
   * @param mixed
   * @return bool
   */
  public function errorMessage($value, $key)
  {
    if (!$this->inputCheck($value)) {
      return $this->errors[$key];
    }
  }
  /**
   * @param string
   * @param mixed
   * @return string
   */
  public function validationCheck($mail)
  {
    if (preg_match($this->pattern, $mail)) {
    } else {
      return  $this->errors['mailvalidation'];
    }
  }

  /**
   * @param string
   * @param mixed
   * @return int
   */
  public function lengthCheck($input, $letterLimit)
  {
    if (mb_strlen($input) > $letterLimit) {
      return $this->errors['lengthError'];
    }
    return;
  }

  public function nullCheck($input, $error)
  {
    if ($input != null) {
      $input = $error;
    }
    return $error;
  }
}
