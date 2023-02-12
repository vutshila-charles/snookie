<div>
   <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                  <div class="bg-gray-50">
                      <div class="max-w-2xl px-4 pt-16 pb-24 mx-auto sm:px-6 lg:max-w-7xl lg:px-8">
                        <div class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
                          <form wire:submit.prevent="savePersonalDetails">
                            <div>
                              <h2 class="text-lg font-medium text-gray-900">Personal Information</h2>
                              <div class="pt-10 mt-10 border-t border-gray-200">
                                <div class="grid grid-cols-1 mt-4 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                                  <x-inputs.short label="First name" name="personalDetails.name" placeholder="First name and Last Name" />
                                  <x-inputs.short label="Email" name="personalDetails.phone" placeholder="Phone" />
                                  <x-inputs.long  label="Country" name="personalDetails.country" placeholder="Country" />
                                  <x-inputs.short label="State" name="personalDetails.state" placeholder="State" />
                                  <x-inputs.short  label="Address" name="personalDetails.address" placeholder="Address" />
                                  <x-inputs.short  label="City" name="personalDetails.city" placeholder="City" />
                                  <x-inputs.short label="Postal Code" name="personalDetails.zip" placeholder="Postal Code" />
                                  <x-inputs.textarea label="About" name="personalDetails.about" placeholder="About" />
                                  <input type="file" wire:model="image"/>
                                </div>
                              </div>
                                <div class="px-4 py-6 border-t border-gray-200 sm:px-6">
                                  <button type="submit" class="w-full px-4 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Save</button>
                                </div>
                            </div>
                          </form>
                          
                          <!-- Order summary -->
                          <div class="mt-10 lg:mt-0">
                            <h2 class="text-lg font-medium text-gray-900">Your Details</h2>
                            <div class="mt-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                              <h3 class="sr-only">Items in your cart</h3>
                              <ul role="list" class="divide-y divide-gray-200">
                                <li class="flex px-4 py-6 sm:px-6">
                                  <div class="flex-shrink-0">
                                    <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-02-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-20 rounded-md">
                                  </div>
                                  <div class="flex flex-col flex-1 ml-6">
                                    <div class="flex">
                                      <div class="flex-1 min-w-0">
                                        <h4 class="text-sm">
                                          <a href="#" class="font-medium text-gray-700 hover:text-gray-800">{{ auth()->user()->name }}</a>
                                        </h4>
                                        <p class="mt-1 text-sm text-gray-500">{{ auth()->user()->email }}</p>
                                        <p class="mt-1 text-sm text-gray-500">{{ auth()->user()->personalDetails->phone }}</p>
                                      </div>
                                      <div class="flex-shrink-0 flow-root ml-4">
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <!-- More products... -->
                              </ul>
                              <dl class="px-4 py-6 space-y-6 border-t border-gray-200 sm:px-6">
                                <div class="flex items-center justify-between">
                                  <dt class="text-sm">Nationality</dt>
                                  <dd class="text-sm font-medium text-gray-900">South African</dd>
                                </div>
                                <div class="flex items-center justify-between">
                                  <dt class="text-sm">State</dt>
                                  <dd class="text-sm font-medium text-gray-900">{{ auth()->user()->personalDetails->state }}</dd>
                                </div>
                                <div class="flex items-center justify-between">
                                  <dt class="text-sm">City</dt>
                                  <dd class="text-sm font-medium text-gray-900">{{ auth()->user()->personalDetails->city }}</dd>
                                </div>
                              </dl>
                              <div class="px-4 py-6 border-t border-gray-200 sm:px-6">
                                <button type="submit" class="w-full px-4 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Confirm Information</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
  
            </div>
        </div>
    </div>
</div>
