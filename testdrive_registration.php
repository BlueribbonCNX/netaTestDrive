<!DOCTYPE html>
<html lang="en">

<?php 
require('connect.php');
require('header.php');
// require('style.php');
// require('function.php');
?>


<script src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
<script>

async function getUserProfile() {
    const profile = await liff.getProfile()
    document.getElementById("pictureUrl").src = profile.pictureUrl
    document.getElementById("userId").append(profile.userId)
    document.getElementById("statusMessage").append(profile.statusMessage)
    document.getElementById("displayName").append(profile.displayName)
    document.getElementById("decodedIDToken").append(liff.getDecodedIDToken().email)
    document.getElementById("cus_email").value = liff.getDecodedIDToken().email
    
}

async function main() {
    await liff.init({ liffId: "1657200437-oLMxZnek" })
    
    getEnvironment()
    getUserProfile()

    // if(registered()){
    //   console.log("registered");
    // }else{
    //   console.log("Not registered");
    //   getEnvironment()
    //   getUserProfile()
    // }
    
    // getContext()
    // getFriendship()
    // createUniversalLink()
}

main()
</script>
<body>
<p id="os"><b>OS:</b> </p>
  <p id="language"><b>Language:</b> </p>
  <p id="version"><b>Version:</b> </p>
  <p id="isInClient"><b>isInClient:</b> </p>
  <p id="accessToken"><b>AccessToken:</b> </p>
  <img id="pictureUrl">
  <p id="userId"><b>userId:</b> </p>
  <p id="displayName"><b>displayName:</b> </p>
  <p id="statusMessage"><b>statusMessage:</b> </p>  
  <p id="decodedIDToken"><b>email:</b> </p>
  <p id="type"><b>type:</b> </p>
  
<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/neta_logo2.jpg" alt="" width="150">
        <h2>ลงทะเบียนทดลองขับ Neta V</h2>
        <p class="lead">สัมผัสประสบการณ์ก่อนใคร กับรถยนต์ไฟฟ้า Neta ในจังหวัดเชียงใหม่</p>
    </div>

    <form class="needs-validation" novalidate autocomplete="off">
        <div class="row g-5">   
            <div class="col-3"></div>
            <div class="col-md-12 col-lg-6">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            กรุณากรอกชื่อจริง
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required >
                    <div class="invalid-feedback">
                        กรุณากรอกนามสกุล
                    </div>
                </div>

                <div class="col-12">
                    <label for="tel" class="form-label">เบอร์ติดต่อ</label>
                    <input type="email" class="form-control" name="tel" id="tel" required>
                    <div class="invalid-feedback">
                        กรุณากรอกเบอร์ติดต่อ
                    </div>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="email" class="form-control" name="email" id="cus_email">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                </div>

                <hr class="my-4">
                <h4 class="mb-3">จำนวนรถภายในครอบครัว</h4>

                <div class="my-3">
                    <div class="form-check">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="credit">ยังไม่มีรถยนต์</label>
                    </div>
                    <div class="form-check">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="credit">1 คัน</label>
                    </div>
                    <div class="form-check">
                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="debit">2 คัน</label>
                    </div>

                    <div class="form-check">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="paypal">มากกว่า 3 คัน</label>
                    </div>
                </div>
            </div>


            <hr class="my-4">
            <h4>สาเหตุความต้องการซื้อรถยนต์ไฟฟ้า Neta</h4>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="gas">
                <label class="form-check-label" for="gas">ต้องการประหยัดค่าใช้จ่าย/น้ำมันมีราคาแพง</label>
            </div>
    
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="city">
                <label class="form-check-label" for="city">ต้องการใช้รถในเมืองเท่านั้น</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="accelerate">
                <label class="form-check-label" for="accelerate">อัตราเร่งรถไฟฟ้าดีกว่ารถยนต์ใช้น้ำมัน</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="future">
                <label class="form-check-label" for="future">เทคโนโลยีล้ำสมัยในราคาที่ประหยัด</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="govcampaign">
                <label class="form-check-label" for="govcampaign">ได้รับการสนับสนุนจากภาครัฐ</label>
            </div>
    
            <hr class="my-4">
        
            <div class="text-center">
                <small>* เมื่อมีกำหนดการงานทดลองขับแล้ว จะมีเจ้าหน้าที่ติดต่อกลับลูกค้า</small>
            </div>
            <div class="mb-3 text-center">
                <small>เพื่อคอนเฟิร์มวันเวลานัดหมายการทดลองขับในงาน</small>
            </div>

            <button class="w-100 btn btn-primary btn-lg" type="submit">ลงทะเบียน</button>
            <div class="col-3"></div>
        </div>
    </form>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

  </body>
</html>