<div>
    <div class="row"
        x-data="
        {
            hour: 0,
            minute: 0,
            second: 0,

            decreaseHourButtonToggle: true,
            increaseHourButtonToggle: false,

            decreaseHour () {
                this.hour --;
                this.increaseHourButtonToggle = false;
                if (this.hour == 0) {
                    this.decreaseHourButtonToggle = true;
                }
            },

            increaseHour() {
                this.hour ++;
                this.decreaseHourButtonToggle = false;
                if (this.hour == 24) {
                    this.increaseHourButtonToggle = true;
                }
            },
        }
    ">
        <div class="col-lg-3 col-lg-3 col-sm-12">
            <h4 class="text-center">Hour</h4>
            <div class="input-group">
                <button type="button" class="btn btn-outline-secondary" id="decreaseHour" 
                    x-on:click="decreaseHour()"
                    x-bind:disabled="decreaseHourButtonToggle"
                >-</button>
                <input type="text" class="form-control text-center" aria-label="Text input with segmented dropdown button" id="hour" x-bind:value="hour">
                <button type="button" class="btn btn-outline-secondary" aria-expanded="false" id="increaseHour" 
                    x-on:click="increaseHour()"
                    x-bind:disabled="increaseHourButtonToggle"
                >+</button>
            </div>
        </div>
        <div class="col-lg-3 col-lg-3 col-sm-12">
            <h4 class="text-center">Minute</h4>
            <div class="input-group">
                <button type="button" class="btn btn-outline-secondary" id="decreaseMinute"
                    onclick="decreaseMinute(this, document.getElementById('minute'))" disabled>-</button>
                <input type="text" class="form-control text-center"
                    aria-label="Text input with segmented dropdown button" value="0" id="minute">
                <button type="button" class="btn btn-outline-secondary" aria-expanded="false" id="increaseMinute"
                    onclick="increaseMinute(this, document.getElementById('minute'))">+</button>
            </div>
        </div>
        <div class="col-lg-3 col-lg-3 col-sm-12">
            <h4 class="text-center">Second</h4>
            <div class="input-group">
                <button type="button" class="btn btn-outline-secondary" id="decreaseSecond"
                    onclick="decreaseSecond(this, document.getElementById('second'))" disabled>-</button>
                <input type="text" class="form-control text-center"
                    aria-label="Text input with segmented dropdown button" value="0" id="second">
                <button type="button" class="btn btn-outline-secondary" aria-expanded="false" id="increaseSecond"
                    onclick="increaseSecond(this, document.getElementById('second'))">+</button>
            </div>
        </div>
        <div class="col-lg-3 col-lg-3 col-sm-12">
            <h4 class="text-center">&#8232;</h4>
            <button type="button" class="btn btn-outline-dark w-100"
                onclick="set(document.getElementById('timer'))">Set</button>
        </div>
    </div>
    <hr>
    <div>
        <h1 id="timer" class="text-center" id="timer" style="font-size: 5em;">00:00:00</h1>
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
</div>
