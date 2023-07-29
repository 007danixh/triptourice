 <style>
     .formErr {
         color: red;
     }
 </style>
<form id="booking-form" name="conForm" action="./layouts/contact-form-logic" method="POST"  onsubmit=" return validateForm()" class="d-block d-flex contact-form">
    <div class="fields d-block d-flex">
        <div class="textfield-search one-third">
            <input required type="text" name="name" class="form-control" placeholder="Name">
             <span class="formErr" id="name"></span>
        </div>
        <div class="textfield-search one-third">
            <input required type="email" name="email" class="form-control" placeholder="Email">
             <span class="formErr" id="email"></span>
        </div>
        <div class="textfield-search one-third">
            <input required type="text" name="phone" class="form-control" placeholder="Phone">
             <span class="formErr" id="phone"></span>
        </div>
        <!-- <div class="select-wrap one-third">
            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
            <select name="" id="" class="form-control" placeholder="Keyword search">
                <option value="">Where</option>
                <option value="">San Francisco USA</option>
                <option value="">Berlin Germany</option>
                <option value="">Lodon United Kingdom</option>
                <option value="">Paris Italy</option>
            </select>
        </div> -->
    </div>
    <button type="submit" name="submit" class="search-submit btn btn-primary">Book Now</button>
</form>


<script>
  
     //   Clear errors
     function clearErrors() {
         element = document.getElementsByClassName('formErr');
         for (let item of element) {
             item.textContent = "";
         }
     }

     //set errors
     function setError(id, error) {

         element = document.getElementById(id);
         element.textContent = error;


     }

     //validate errors
     function validateForm() {

         var returnval = true;
         clearErrors();
         var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
         var name = document.forms['conForm']['name'].value;
         var email = document.forms['conForm']['email'].value;
         var phone = document.forms['conForm']['phone'].value;
        //  var message = document.forms['conForm']['message'].value;

         if (name.length < 5) {

             setError('name', '* Length of name is too short');
             returnval = false;
         }

         if (phone.length < 10) {

             setError('phone', '* Phone number should be at least 10 digits.');
             returnval = false;
         }
         if (phone.length > 18) {

             setError('phone', '* Phone number should be at least 10 digits.');
             returnval = false;
         }
        //  if (message.length < 2) {

        //      setError('message', '* Message should  be greater than 20 characters');
        //      returnval = false;
        //  }
        //  if (message.length > 255) {

        //      setError('message', '* Message should not be greater than 255 characters');
        //      returnval = false;
        //  }
         if (!email.match(validRegex)) {
             setError('email', '* Email must be of type email.');
             returnval = false;
         }

         return returnval;
     }
 </script>
