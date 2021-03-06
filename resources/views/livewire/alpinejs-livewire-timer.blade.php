<div x-data="timer()" x-init="startTimer();">
    <div class="row">
        <div class="col-lg-4 col-lg-4 col-sm-12">
            <h4 class="text-center">Hour</h4>
            <div class="input-group">
                <button type="button" class="btn btn-outline-secondary" id="decreaseHour" x-on:click="decreaseHour()"
                    x-bind:disabled="decreaseHourButtonToggle">-</button>
                <input type="text" class="form-control text-center"
                    aria-label="Text input with segmented dropdown button" id="hour" x-bind:value="hour">
                <button type="button" class="btn btn-outline-secondary" aria-expanded="false" id="increaseHour"
                    x-on:click="increaseHour()" x-bind:disabled="increaseHourButtonToggle">+</button>
            </div>
        </div>

        <div class="col-lg-4 col-lg-4 col-sm-12">
            <h4 class="text-center">Minute</h4>
            <div class="input-group">
                <button type="button" class="btn btn-outline-secondary" id="decreaseMinute"
                    x-on:click="decreaseMinute()" x-bind:disabled="decreaseMinuteButtonToggle">-</button>
                <input type="text" class="form-control text-center"
                    aria-label="Text input with segmented dropdown button" id="minute" x-bind:value="minute">
                <button type="button" class="btn btn-outline-secondary" aria-expanded="false" id="increaseMinute"
                    x-on:click="increaseMinute()" x-bind:disabled="increaseMinuteButtonToggle">+</button>
            </div>
        </div>

        <div class="col-lg-4 col-lg-4 col-sm-12">
            <h4 class="text-center">Second</h4>
            <div class="input-group">
                <button type="button" class="btn btn-outline-secondary" id="decreaseSecond"
                    x-on:click="decreaseSecond()" x-bind:disabled="decreaseSecondButtonToggle">-</button>
                <input type="text" class="form-control text-center"
                    aria-label="Text input with segmented dropdown button" id="second" x-bind:value="second">
                <button type="button" class="btn btn-outline-secondary" aria-expanded="false" id="increaseSecond"
                    x-on:click="increaseSecond()" x-bind:disabled="increaseSecondButtonToggle">+</button>
            </div>
        </div>
    </div>
    <hr>
    <div>
        <h1 class="text-center" id="timer" style="font-size: 5em;">
            <span x-text="time().f_hour"></span>:<span x-text="time().f_minute"></span>:<span
                x-text="time().f_second"></span>
        </h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <button type="button" class="btn btn-outline-success w-100 mb-2" x-on:click="start()">Start</button>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <button type="button" class="btn btn-outline-warning w-100 mb-2" x-on:click="stop()">Pause</button>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <button type="button" class="btn btn-outline-danger w-100 mb-2" x-on:click="reset()">Reset</button>
        </div>
    </div>

    <script>
        function timer() {
            return {
                hour: 0,
                minute: 0,
                second: 0,
                go: false,

                decreaseHourButtonToggle: true,
                increaseHourButtonToggle: false,
                decreaseMinuteButtonToggle: true,
                increaseMinuteButtonToggle: false,
                decreaseSecondButtonToggle: true,
                increaseSecondButtonToggle: false,

                start() {
                    this.go = true;
                },

                stop() {
                    this.go = false;
                },

                reset() {
                    this.go = false;
                    this.hour = 0;
                    this.minute = 0;
                    this.second = 0;
                },

                startTimer() {
                    setInterval(() => {
                        if (this.go == true) {
                            this.countDown();
                        }
                    }, 1000);
                },

                countDown() {
                    this.second = this.second - 1;
                    if (this.second == -1) {
                        this.second = 60;
                        this.minute = this.minute - 1;
                        if (this.minute == -1) {
                            this.minute = 60;
                            this.hour = this.hour - 1;
                        }
                    }
                },

                decreaseHour() {
                    this.hour--;
                    this.increaseHourButtonToggle = false;
                    if (this.hour == 0) {
                        this.decreaseHourButtonToggle = true;
                    }
                },

                increaseHour() {
                    this.hour++;
                    this.decreaseHourButtonToggle = false;
                    if (this.hour == 24) {
                        this.increaseHourButtonToggle = true;
                    }
                },

                decreaseMinute() {
                    this.minute--;
                    this.increaseMinuteButtonToggle = false;
                    if (this.minute == 0) {
                        this.decreaseMinuteButtonToggle = true;
                    }
                },

                increaseMinute() {
                    this.minute++;
                    this.decreaseMinuteButtonToggle = false;
                    if (this.minute == 60) {
                        this.increaseMinuteButtonToggle = true;
                    }
                },

                decreaseSecond() {
                    this.second--;
                    this.increaseSecondButtonToggle = false;
                    if (this.second == 0) {
                        this.decreaseSecondButtonToggle = true;
                    }
                },

                increaseSecond() {
                    this.second++;
                    this.decreaseSecondButtonToggle = false;
                    if (this.second == 60) {
                        this.increaseSecondButtonToggle = true;
                    }
                },

                time() {
                    return {
                        f_hour: ('0' + this.hour).slice(-2),
                        f_minute: ('0' + this.minute).slice(-2),
                        f_second: ('0' + this.second).slice(-2),
                    }
                }
            }
        }
    </script>
</div>
