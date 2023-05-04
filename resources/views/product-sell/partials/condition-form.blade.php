<div class="row mb-4">
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">Battery Power:</label>
        <input type="number" class="form-control" id="recipient-name" name="battery_power" min="500" max="1999">
    </div>
    <div class="form-group col">
        <label for="clock_speed" class="default mb-2">Clock Speed:</label>
        <input type="number" class="form-control" id="clock-speed" name="clock_speed" min="0.5" max="3">
    </div>
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">Dual sim:</label>
        <select class="form-control" aria-label=".form-select-sm example" name="dual_sim">
            <option selected>Select</option>
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
    </div>
</div>

<div class="row mb-4">
    <div class="form-group col">
        <label for="front_camera" class="default mb-2">Front Camera mega pixels:</label>
        <input type="number" class="form-control" id="front-camera" value="front_camera" name="fc">
    </div>

    <div class="form-group col">
        <label for="4g" class="default mb-2">4G:</label>
        <select class="form-select form-select" aria-label=".form-select-sm example" name="four_g">
            <option selected>Select</option>
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
    </div>
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">Talk Time:</label>
        <input type="number" class="form-control" id="recipient-name" value="talk_time" name="talk_time">
    </div>
</div>

<div class="row mb-4">
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">Internal Memory:</label>
        <input type="number" class="form-control" id="recipient-name" value="int_memory" name="internal_memory">
    </div>
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">Mobile Depth:</label>
        <input type="number" class="form-control" id="recipient-name" value="mobile_depth" name="m_dep">
    </div>
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">No Of Cores:</label>
        <input type="number" class="form-control" id="recipient-name" value="no_of_cores" name="n_cores">
    </div>
</div>

<div class="row mb-4">
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">Pixel Height:</label>
        <input type="number" class="form-control" id="recipient-name" value="pixel_height" name="px_height">
    </div>
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">Pixel Width:</label>
        <input type="number" class="form-control" id="recipient-name" value="pixel_weight" name="px_width">
    </div>
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">RAM:</label>
        <input type="number" class="form-control" id="recipient-name" value="ram" name="ram">
    </div>
</div>

<div class="row mb-4">
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">Screen Height:</label>
        <input type="number" class="form-control" id="recipient-name" value="screen_height" name="sc_h">
    </div>
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">Screen Weight:</label>
        <input type="number" class="form-control" id="recipient-name" value="screen_width" name="sc_w">
    </div>
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">Camera Pixel:</label>
        <input type="number" class="form-control" id="recipient-name" value="pc" name="pc">
    </div>
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">Mobile Weight:</label>
        <input type="number" class="form-control" id="recipient-name" value="screen_weight" name="mobile_wt">
    </div>
</div>

<div class="row mb-4">
    <div class="form-group col">
        <label for="3g" class="default mb-2">3G:</label>
        <select class="form-control" aria-label=".form-select-sm example" name="three_g">
            <option selected>Select</option>
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
    </div>
    <div class="form-group col">
        <label for="battery_power" class="default mb-2">Touch Screen:</label>
        <select class="form-control" aria-label=".form-select-sm example" name="touch_screen">
            <option selected>Select</option>
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
    </div>

    <div class="form-group col">
        <label for="3g" class="default mb-2">Wifi:</label>
        <select class="form-control" aria-label=".form-select-sm example" name="wifi">
            <option selected>Select</option>
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
    </div>
    <div class="form-group col">
        <label for="3g" class="default mb-2">Bluetooth:</label>
        <select class="form-control" aria-label=".form-select-sm example" name="blue">
            <option selected>Select</option>
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
    </div>
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-primary">Predict</button>
</div>
