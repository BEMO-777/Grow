<div class="backup-control bg-white p-20 rad-10">
    <h2 class="mt-0 mb-10">Backup Manager</h2>
    <p class="mt-0 mb-20 fs-15 c-gray capital">control backup time and location</p>
    <div class="date d-flex align-c mb-15">
      <input name="time" type="radio" id="daily">
      <label for="daily">Daily</label>
    </div>
    <div class="date d-flex align-c mb-15">
      <input name="time" type="radio" id="monthly">
      <label for="monthly">Monthly</label>
    </div>
    <div class="date d-flex align-c mb-15">
      <input name="time" type="radio" id="yearly">
      <label for="yearly">Yearly</label>
    </div>
    <div class="servers d-flex align-c txt-c">

      <input type="radio" name="servers" id="s-one">
      <div class="server rad-10 mb-15 w-full">
        <label class="d-block m-15" for="s-one">
          <i class="fa-solid fa-server d-block mb-10"></i>
          server
        </label>
      </div>

      <input type="radio" name="servers" id="s-two" checked>
      <div class="server rad-10 mb-15 w-full">
        <label class="d-block m-15" for="s-two">
          <i class="fa-solid fa-server d-block mb-10"></i>
          server
        </label>
      </div>

      <input type="radio" name="servers" id="s-three">
      <div class="server rad-10 mb-15 w-full">
        <label class="d-block m-15" for="s-three">
          <i class="fa-solid fa-server d-block mb-10"></i>
          server
        </label>
      </div>

    </div>
  </div>