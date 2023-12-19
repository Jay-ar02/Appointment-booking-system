<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alaga | View</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        
body {
    font-family: Arial, sans-serif;
    padding: 20px;
    background: #dbdbdb;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  html, body {
    height: 100%;
  }
.card {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    border-radius: 30px;
    padding: 10px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    width: 70%;
    height: 480px;
    background: #ebebeb;  /* fallback for old browsers */ /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

  .left-container {
    background: #000000; 
background: -webkit-linear-gradient(to right, #14c299, #008667);
background: linear-gradient(to right, #14c299, #008667); 
    flex: 1;
    max-width: 30%;
    display: flex;
    flex-direction: column;
    align-items: center;
    height:430px;
    padding: 10px;
    margin: 30px;
    border-radius: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  
  .right-container {
    background: #000000; 
    background: -webkit-linear-gradient(to left, #14c299, #008667);
    background: linear-gradient(to left, #14c299, #008667); 
    flex: 1;
    max-width:70%;
    height:430px;
    padding: 10px;
    margin: 20px;
    border-radius:30px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  @media only screen and (max-width: 860px) {
    .card
     {
     flex-direction: column;
     margin: 10px;
     height: auto;
     width: 90%;
    }
    .left-container{
        flex: 1;
        max-width:100%; 
    }
  }
  @media only screen and (max-width: 600px) {
    .card
     {
     flex-direction: column;
     margin: 10px;
    }
    .left-container{
        flex: 1;
        max-width:100%; 
    }
  }
  img {
    width: 200px;
    height: 200px;
    max-width: 200px;
    border-radius: 50%;
    margin: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  
  h2 {
    font-size: 24px;
    margin-bottom: 5px;
  }
  h3 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 5px;
  }
  .gradienttext{
    background-image: linear-gradient(to right, #ffffff 0%, #b3b3b3 100%);
    color: transparent;
    -webkit-background-clip: text;
  }
  p {
    font-size: 18px;
    margin-bottom: 20px;
    color:aliceblue
  }
  
  table {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 280px;
    border-collapse: collapse;
  }
  
  td {
    
    padding: 10px;
    border: none;
    border-radius: 20px;
    color: white;
  }
  
  td:first-child {
    font-weight: bold;
  }
  .credit a {
  text-decoration: none;
  color: #fff;
  font-weight: 800;
}

.credit {
    color: #fff;
  text-align: center;
  margin-top: 10px;
  font-family: Verdana,Geneva,Tahoma,sans-serif;
}
    </style>
</head>
<body>
  
  <div class="card">
      <div class="left-container">
          <img src="{{ $doctor->image }}" alt="Profile Image">
          <h2 class="gradienttext">{{ $doctor->name }}</h2>
          <p>{{ $doctor->specialty }}</p>
      </div>
      <div class="right-container">
          <h3 class="gradienttext">Profile Details</h3>
          <table>
              <tr>
                  <td>Name :</td>
                  <td>{{ $doctor->name }}</td>
              </tr>
              <tr>
                  <td>Phone :</td>
                  <td>{{ $doctor->phone }}</td>
              </tr>
              <tr>
                  <td>Specialty :</td>
                  <td>{{ $doctor->specialty }}</td>
              </tr>
              <tr>
                  <td>Room No. :</td>
                  <td>{{ $doctor->room }}</td>
              </tr>
          </table>
          
      </div>
  </div><br>
  <a href="{{ url('showdoctor') }}" class="btn btn-secondary mb-3">Back</a>
  
</body>
</html>







