<!-- search room modal -->
<div class="modal fade" id="search_room_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <button type="button" class="modal-close" data-bs-dismiss="modal">
                    <i class="bi bi-x"></i>
                </button>
                <div class="hotel-search-modal">
                    <h2>Find the best Hotel</h2>
                    <form action="{{ route('home.search') }}" method="get">
                        <div class="mb-3">
                            <label for="mod_destionation" class="mb-2">Destination or Hotel name</label>
                            <div class="input-wrapper solid">
                                <i class="bi bi-geo-alt"></i>
                                <input type="text" name="destination" id="mod_destionation" class="form-control"
                                    placeholder="Location or Hotel Name" value="{{ old('destination')}}"/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="mod_checked_in" class="mb-2">Checked In</label>
                            <div class="input-wrapper solid">
                                <i class="bi bi-calendar-plus"></i>
                                <input type="date" name="checkin" id="mod_checked_in" class="form-control"
                                    placeholder="Checked In" value="{{ old('checkin') }}" min="{{ date('Y-m-d') }}"/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="mod_checked_out" class="mb-2">Checked Out</label>
                            <div class="input-wrapper solid">
                                <i class="bi bi-calendar-check"></i>
                                <input type="date" name="checkout" id="mod_checked_out" class="form-control"
                                    placeholder="Checked Out" value="{{ old('checkout') }}" min="{{ date('Y-m-d') }}"/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-4">
                                    <label for="rooms" class="mb-2">Rooms</label>
                                    <div class="input-wrapper solid">
                                        <i class="bi bi-house-check"></i>
                                       <input type="number" name="rooms" id="rooms" class="form-control" value="{{ old('rooms') ?? 1 }}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="adults" class="mb-2">Adults</label>
                                    <div class="input-wrapper solid">
                                        <i class="bi bi-person-plus"></i>
                                        <input type="number" name="adults" id="adults" class="form-control" value="{{ old('adults') ?? 1 }}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="childs" class="mb-2">Children</label>
                                    <div class="input-wrapper solid">
                                        <i class="bi bi-person"></i>
                                        <input type="number" name="childs" id="childs" class="form-control" value="{{ old('childs') ?? 0 }}">
                                        {{-- <select type="text" name="checked_out"
                                            class="form-control form-select" placeholder="Checked Out">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="large-btn mt-4">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>