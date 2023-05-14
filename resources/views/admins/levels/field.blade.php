                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="level_name">{{ __('Level Name') }}<span
                                class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="level_name" name="level_name"
                                placeholder="{{ __('Enter the level name') }}..">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="level_description">{{ __('Level Description') }} <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="level_description" name="level_description"
                                placeholder="{{ __('Enter the level description') }}..">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="level_status">{{ __('Level Status') }} <span
                                class="text-danger">*</span>
                        </label>
                        <div class="col-lg-8">
                            <select name="level_status" id="level_status" class="form-control">
                                <option value="">{{ __('Select') }}</option>
                                <option value="1">{{ __('Active') }}</option>
                                <option value="0">{{ __('Inactive') }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="submit"> Do you want to Submit?<span
                                class="text-danger">*</span>
                        </label>
                        <div class="col-lg-8">
                            <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms"
                                    value="1">
                                <span class="css-control-indicator"></span> Yes/No
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-8 ml-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>