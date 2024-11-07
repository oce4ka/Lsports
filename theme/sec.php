<section class="s-prod-header bg-grey">
	<h1>wefgerg</h1>
	
	
	
<lsports-sec api-token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkb21haW4iOiJodHRwczovL3d3dy5sc3BvcnRzLmV1Iiwid2lkZ2V0SWQiOiIwMmk3UzAwMDAwNlhLV05RQTQiLCJjdXN0b21lcklkIjoiMDAxM1YwMDAwMDlIQXlUUUFXIiwiZXhwIjo0ODYzNTc5NDQwLCJpc3MiOiJsc3BvcnRzLmV1IiwiYXVkIjoiaHR0cHM6Ly93d3cubHNwb3J0cy5ldSJ9.fM1ad2MTKnuqJmZvoA1fzswpOegnEqaVMi4HQHkcQJY"></lsports-sec>



<script>
const req = async () => {
  try {
    const res = await fetch("https://sec-gw.lsports.eu/fixtures/api/v1/fixtures", {
      headers: {
        Authorization: "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkb21haW4iOiJodHRwczovL3d3dy5sc3BvcnRzLmV1Iiwid2lkZ2V0SWQiOiIwMmk3UzAwMDAwNlhLV05RQTQiLCJjdXN0b21lcklkIjoiMDAxM1YwMDAwMDlIQXlUUUFXIiwiZXhwIjo0ODYzNTc5NDQwLCJpc3MiOiJsc3BvcnRzLmV1IiwiYXVkIjoiaHR0cHM6Ly93d3cubHNwb3J0cy5ldSJ9.fM1ad2MTKnuqJmZvoA1fzswpOegnEqaVMi4HQHkcQJY"
      }
    });
    if (!res.ok) {
        throw new Error(`HTTP error! status: ${res.status}`);
    }
    const json = await res.json();
    console.log(json);

    const widget = document.querySelector('lsports-sec');  
    if (widget != null) {
          // Assuming 'json' contains a property 'fixtures' that you want to assign
          // Adjust this based on the actual structure of your JSON response
          widget.fixtures = json.fixtures;
    }
  } catch (error) {
    console.error("Failed to fetch data:", error);
  }
};

req();
</script>

 
    </section>