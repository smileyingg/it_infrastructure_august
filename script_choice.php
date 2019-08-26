<script type="text/javascript">
  function checkInterested() {
    if (document.getElementById('q5_s1_c1').checked || document.getElementById('q5_s2_c1').checked) {
      document.getElementById('ifYes').style.display = 'block';
      document.getElementById('company_name').focus();
      document.getElementById('company_name').required = true;
      document.getElementById('customer_name').required = true;
      document.getElementById('customer_telephone').required = true;
      document.getElementById('customer_email').required = true;
    } else {
      document.getElementById('ifYes').style.display = 'none';
      document.getElementById('company_name').value = "";
      document.getElementById('customer_name').value = "";
      document.getElementById('customer_telephone').value = "";
      document.getElementById('customer_email').value = "";
      document.getElementById('company_name').required = false;
      document.getElementById('customer_name').required = false;
      document.getElementById('customer_telephone').required = false;
      document.getElementById('customer_email').required = false;
    }
  }
</script>