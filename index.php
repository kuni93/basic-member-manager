<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Member Manager</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <style>body {padding-top: 50px;} .starter-template {padding: 40px 15px; text-align: center;</style>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Member Manager</a>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="starter-template">
      <h1>新增會員</h1>
    </div>
    <form class="form-horizontal" method="post" action="submit.php">
     <div class="form-group">
        <label for="id"  class="col-sm-2 control-label">Member ID</label>
        <div class="col-sm-10">
          <input type="r=text" class="form-control" id="id" name="id" required>
        </div>
      </div>
      <div class="form-group">
        <label for="name"  class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" id="name" name="name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="age"  class="col-sm-2 control-label">Age</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="age" min="1" max="100" name="age" required>
        </div>
      </div>
      <div class="form-group">
        <label for="height" class="col-sm-2 control-label">Height(cm)</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="height" min="100" max="200" name="height" required>
        </div>
      </div>
      <div class="form-group">
        <label for="weight" class="col-sm-2 control-label">Weight(kg)</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="weight" min="10" max="100" name="weight" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">送出</button>
        </div>
      </div>
    </form>
  </div>

  <div class="container">
   <div class="starter-template">
      <h1>會員清單</h1>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Member Name</th>
          <th>Age</th>
          <th>Height</th>
          <th>Weight</th>
          <th>Option</th>
        </tr>
      </thead>
      <tbody>
        <?php
          require_once("dbtools.inc.php");
          $link = create_connection();
          $result = execute_sql("4a3g0007_database", "SELECT * FROM 160930_works", $link);
          $total_data = mysql_num_rows($result);
          $total_fields = mysql_num_fields($result);

          for($j = 0; $j < $total_data; $j++){
            $row = mysql_fetch_row($result);
            echo "<tr>";
            for($i = 0; $i < $total_fields; $i++)
              echo "<td>$row[$i]</td>";
            echo '<td><a class="btn btn-default btn-xs" href="updata.php?id=';
            echo $row[0];
            echo '" role="button">修改</a> <a class="btn btn-default btn-xs btn-danger" href="delete.php?id=';
            echo $row[0];
            echo '" role="button">刪除</a></td></tr>';
          }

          mysql_free_result($result);
          mysql_close($link);
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>