                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label @error('level_name') is-invalid @enderror" for="level_name">{{ __('Level Name') }}
                            <span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="level_name" name="level_name"
                                placeholder="{{ __('Enter the level name') }}.." value ="{{ isset($level) ? $level->name : old('level_name') }}">
                        </div>

                        @error('level_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="description">{{ __('Level Description') }} <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                placeholder="{{ __('Enter the level description') }}.." value ="{{ isset($level) ? $level->description : old('description') }}">
                        </div>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="level_status">{{ __('Level Status') }} <span
                                class="text-danger">*</span>
                        </label>
                        <div class="col-lg-8">
                            <select name="level_status" id="level_status" class="form-control @error('level_status') is-invalid @enderror">
                            @foreach (Helper::getStatus() as $key => $status)
                                    <option value="{{ $key }}" {{ isset ($level) ? Helper::getSelectedValue($key, $level->status) : '' }}>{{ $status }}</option>
                            @endforeach
                            </select>
                        </div>

                        @error('level_status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="form-group row">
                        <div class="col-lg-10 ml-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                   