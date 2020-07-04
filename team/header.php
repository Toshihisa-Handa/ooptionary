 <!-- font awsome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
 <style>
/* ヘッダー */

ul{
 list-style: none;
}

a{
  text-decoration: none;
  color:black;
}

.header{
  /* position: fixed; */
  /* background-color: white; */
  border-top: 1px solid rgb(153, 167, 189);
  border-bottom: 1px solid rgb(153, 167, 189);
}

 .header-container{
  width: 100%;
  margin: auto;
  background-color: transparent;
  
}


.header-area ul{
  display: flex;
  justify-content: space-around;
  margin:8px 0 8px 0;
  }
.header-sarch{
  background: rgba(var(--b3f,250,250,250),1);
  border: solid 1px rgba(var(--b6a,219,219,219),1);
  border-radius: 3px;
  padding:10px 30px;
}
.hicon{
  font-size:18px;
}
</style>
</head>

<body>


<div class="header">
    <div class="header-container">
     <div class="header-area">
      <ul>
        
       <li>こんにちは〇〇さん <?php echo $_SESSION['uname']; ?></li>
       <li>うぷしょなりー</li>
       <li><input type="text" placeholder='Sarch User' class='header-sarch'></li>
       <li>
        <a href="mypage.php"> <i class="fas hicon fa-home"></i></a>
         <a href="myOops.php"><i class="far hicon fa-comments"></i></a>
         <a href="mypageDetail.php"><i class="fas hicon fa-user-circle"></i></a>
         <a href="logout.php"><i class="fas hicon fa-door-open"></i></a>
         <a href="login.php">ログイン</a>
       </li>
      </ul>
     </div>
   </div>
  </div>