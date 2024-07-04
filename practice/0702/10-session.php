<?php
session_start(); // 啟⽤ session
if (isset($_SESSION['num'])) {
  $_SESSION['num']++;
} else {
  $_SESSION['num'] = 1;
}
// unset($_SESSION['num']); // 刪掉某個 session 變數
echo $_SESSION['num'];
//0704