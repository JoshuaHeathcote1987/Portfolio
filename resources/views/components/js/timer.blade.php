<div class="row">
    <div class="col-lg-3 col-lg-3 col-sm-12">
        <h4 class="text-center">Hour</h4>
        <div class="input-group">
            <button type="button" class="btn btn-outline-secondary" id="decreaseHour" onclick="decreaseHour(this, document.getElementById('hour'))" disabled>-</button>
            <input type="text" class="form-control text-center" aria-label="Text input with segmented dropdown button" value="0" id="hour">
            <button type="button" class="btn btn-outline-secondary"aria-expanded="false" id="increaseHour" onclick="increaseHour(this, document.getElementById('hour'))">+</button>
        </div>
    </div>
    <div class="col-lg-3 col-lg-3 col-sm-12">
        <h4 class="text-center">Minute</h4>
        <div class="input-group">
            <button type="button" class="btn btn-outline-secondary" id="decreaseMinute" onclick="decreaseMinute(this, document.getElementById('minute'))" disabled>-</button>
            <input type="text" class="form-control text-center"
                aria-label="Text input with segmented dropdown button" value="0" id="minute">
            <button type="button" class="btn btn-outline-secondary"aria-expanded="false" id="increaseMinute" onclick="increaseMinute(this, document.getElementById('minute'))">+</button>
        </div>
    </div>
    <div class="col-lg-3 col-lg-3 col-sm-12">
        <h4 class="text-center">Second</h4>
        <div class="input-group">
            <button type="button" class="btn btn-outline-secondary"  id="decreaseSecond" onclick="decreaseSecond(this, document.getElementById('second'))" disabled>-</button>
            <input type="text" class="form-control text-center"
                aria-label="Text input with segmented dropdown button" value="0" id="second">
            <button type="button" class="btn btn-outline-secondary" aria-expanded="false" id="increaseSecond" onclick="increaseSecond(this, document.getElementById('second'))">+</button>
        </div>
    </div>
    <div class="col-lg-3 col-lg-3 col-sm-12">
        <h4 class="text-center">&#8232;</h4>
        <button type="button" class="btn btn-outline-dark w-100" onclick="set(document.getElementById('timer'))">Set</button>
    </div>
</div>
<hr>
<div>
    <h1 class="text-center" style="font-size: 5em;">00:00:00</h1>
</div>
<hr>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <button type="button" class="btn btn-outline-success w-100 mb-2" onclick="start()">Start</button>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <button type="button" class="btn btn-outline-warning w-100 mb-2" onclick="pause()">Pause</button>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <button type="button" class="btn btn-outline-danger w-100 mb-2" onclick="reset()">Reset</button>
    </div>
</div>