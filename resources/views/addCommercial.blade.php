<!DOCTYPE html>
<html>
<head>
<style>
  .title{
    color: #29394D
  }
  .subTitle{
    color: grey
  }
  .addProspectContainer{
   
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .introduction{
    text-align: center
  }
  .introduction>h5{
    font-size: 1rem
  }
  .inputs{
    margin-top: 2rem;
  }
  .names{
    display: flex;
    flex-direction: row;
    gap: 2.5rem;
  }
  .input{
    font-size: 1rem;
    padding: 0.2rem 0.5rem 0.2rem 0.5rem;
  }
</style>
</head>
<body>
  <x-dashboard>
    <div class="addProspectContainer">
      <div class="introduction">
        <h3 class="title">Add a Commercial</h3>
        <h5 class="subTitle">add here the commercials that you think they can help you get prospects</h5>
      </div>
      <div class="inputs">
        <form method="POST" action={{ url('/commercial/store') }}>
          @csrf
          <div class="names">
           <div class="mb-3">
             <label for="firstName" class="form-label">First Name</label>
             <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp">
           </div>
           <div class="mb-3">
             <label for="secondName" class="form-label">Second Name</label>
             <input type="text" class="form-control" name="secondName">
           </div>
          </div>
         
          <div class="mb-3">
            <label for="emailAddress" class="form-label">Email address</label>
            <input type="email" class="form-control" name="emailAddress" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phoneNumber" aria-describedby="emailHelp">
          </div>
       
          <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
          
          <button type="submit" class="btn btn-primary"> Submit </button>
        </form>
      </div>
    </div>
  </x-dashboard>
</body>
</html>
