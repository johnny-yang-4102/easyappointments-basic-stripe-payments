<?php?>


<div id="wizard-frame-4" class="wizard-frame" style="display:none;">


  <div class="frame-container">
      <h2 class="frame-title mt-md-5">Payment</h2>
      
      <div class="payment-data-container">
        <p class="payment-label">Serivce:</p>
        <p class="payment-data" id="payment-service-name"></p>
      <div> 

      <div class="payment-data-container">
        <p class="payment-label">Service Description:</p>
        <p class="payment-data" id="payment-service-description"></p>
      <div> 

      <div class="payment-data-container">
        <p class="payment-label">Service Duration:</p>
        <p class="payment-data" id="payment-service-duration"></p>
      <div> 

      <div class="payment-data-container">
        <p class="payment-label">Service Price:</p>
        <p class="payment-data" id="payment-service-price"></p>
      <div> 


  </div>


</div>

<hr>

<form id="payment-form">

    <div id="payment-element">
      
    </div>
    <button type="button" id="submit-payment">
      <div class="spinner hidden" id="spinner"></div>
      <span id="button-text">Pay now</span>
    </button>
    <div id="payment-message" class="hidden"></div>
</form>


<div class="command-buttons">
        <button type="button" id="button-back-4" class="btn button-back btn-outline-secondary"
                data-step_index="4">
            <i class="fas fa-chevron-left me-2"></i>
            <?= lang('back') ?>
        </button>
        <button type="button" id="button-next-4" class="btn button-next btn-dark"
                data-step_index="4">
            <?= lang('next') ?>
            <i class="fas fa-chevron-right ms-2"></i>
        </button>
    </div>
</div>
