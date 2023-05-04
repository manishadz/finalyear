<form>
    <div class="row">
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">Battery Power:</label>
            <input type="number" class="form-control" id="recipient-name" name="battery_power" min="500" max="1999">
        </div>
        <div class="mb-3 col">
            <label for="clock_speed" class="col-form-label">Clock Speed:</label>
            <input type="number" class="form-control" id="clock-speed" name="clock_speed" min="0.5" max="3">
        </div>
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">Dual sim:</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="dual_sim">
                <option selected>Select</option>
                <option value="0">No</option>
                <option value="1">Yes</option>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="front_camera" class="col-form-label">Front Camera mega pixels:</label>
            <input type="number" class="form-control" id="front-camera" value="front_camera" name="fc">
        </div>

        <div class="mb-3 col">
            <label for="4g" class="col-form-label">4G:</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="four_g">
                <option selected>Select</option>
                <option value="0">No</option>
                <option value="1">Yes</option>

            </select>
        </div>
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">Talk Time:</label>
            <input type="number" class="form-control" id="recipient-name" value="talk_time" name="talk_time">
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">Internal Memory:</label>
            <input type="number" class="form-control" id="recipient-name" value="int_memory"
                name="internal_memory">
        </div>
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">Mobile Depth:</label>
            <input type="number" class="form-control" id="recipient-name" value="mobile_depth" name="m_dep">
        </div>
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">No Of Cores:</label>
            <input type="number" class="form-control" id="recipient-name" value="no_of_cores" name="n_cores">
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">Pixel Height:</label>
            <input type="number" class="form-control" id="recipient-name" value="pixel_height" name="px_height">
        </div>
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">Pixel Width:</label>
            <input type="number" class="form-control" id="recipient-name" value="pixel_weight" name="px_width">
        </div>
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">RAM:</label>
            <input type="number" class="form-control" id="recipient-name" value="ram" name="ram">
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">Screen Height:</label>
            <input type="number" class="form-control" id="recipient-name" value="screen_height"
                name="sc_h">
        </div>
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">Screen Weight:</label>
            <input type="number" class="form-control" id="recipient-name" value="screen_width"
                name="sc_w">
        </div>
        <div class="mb-3 col">
            <label for="3g" class="col-form-label">3G:</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="three_g">
                <option selected>Select</option>
                <option value="0">No</option>
                <option value="1">Yes</option>

            </select>
        </div>

    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">Touch Screen:</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="touch_screen">
                <option selected>Select</option>
                <option value="0">No</option>
                <option value="1">Yes</option>

            </select>
        </div>
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">Camera Pixel:</label>
            <input type="number" class="form-control" id="recipient-name" value="pc"
                name="pc">
        </div>

        <div class="mb-3 col">
            <label for="3g" class="col-form-label">Wifi:</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="wifi">
                <option selected>Select</option>
                <option value="0">No</option>
                <option value="1">Yes</option>

            </select>
        </div>
        <div class="mb-3 col">
            <label for="battery_power" class="col-form-label">Mobile Weight:</label>
            <input type="number" class="form-control" id="recipient-name" value="screen_weight"
                name="mobile_wt">
        </div>
    </div>
    <div class="mb-3 col">
        <label for="3g" class="col-form-label">Bluetooth:</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example"  name="blue">
            <option selected>Select</option>
            <option value="0">No</option>
            <option value="1">Yes</option>

        </select>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Find</button>
    </div>
</form>