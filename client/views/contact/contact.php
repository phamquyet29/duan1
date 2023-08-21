<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid rgb(70, 68, 68);
      border-radius: 4px;
      resize: vertical;
    }

    input[type=email],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid rgb(70, 68, 68);
      border-radius: 4px;
      resize: vertical;
    }

    h2 {
      font-size: 15px;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    .inp-submit {
      display: flex;
      /* text-align: center; */
      justify-content: center;
    }

    input[type=submit] {
      background-color: rgb(37, 116, 161);
      color: white;
      padding: 12px 20px 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      /* float: right;     */
      width: 200px;

    }

    .container {
      border-radius: 5px;
      padding: 20px;
    }

    .col-25 {
      float: left;
      width: 8%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .img-logo {
      width: 300px;
    }
  </style>
</head>

<body>
  <div class="row mb header">
    <h1 style="margin-left: 20px; font-weight: 700">CONTACT</h1>
  </div>
  <div class="logo" style="display: flex; justify-content: center; margin-bottom: 20px;">
    <img style src="<?= USER_ASSET ?>/images/logo.svg" class="img-logo">
  </div>
  <div class="container">
    <form style="margin-left:160px; ">
      <div class="row">
        <div class="col-25">
          <label for="fname">First Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="firstname" required placeholder="Your name..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="lastname" required placeholder="Your last name..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="email">Mail Id</label>
        </div>
        <div class="col-75">
          <input type="email" id="email" name="mailid" required placeholder="Your mail id..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="country">Country</label>
        </div>
        <div class="col-75">
          <select id="country" name="country" required>
            <option value="none">Select Country</option>
            <option value="australia">Việt Nam</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
            <option value="russia">Russia</option>
            <option value="japan">Japan</option>
            <option value="india">India</option>
            <option value="china">China</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="feed_back">Feed Back</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" required placeholder="Write something.." style="height:200px"></textarea>
        </div>
      </div>
      <div class="row inp-submit">
        <input type="submit" value="Submit">
      </div>
    </form>

  </div>

</body>

</html>