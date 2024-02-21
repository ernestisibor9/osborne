<div class="side-bar">
                            <ul class="page-list text-left">
                                <li><a href="{{ route('osborn-service.all-service') }}">All Services <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                @php
                                    $url = request()->segments();
                                @endphp
                                @foreach ($serviceCategories as $serviceCategory)
                                <li class="{{ end($url) == $serviceCategory->id ? 'active' : '' }}"><a href="{{ route('osborn-service.services', $serviceCategory->id) }}">{{ $serviceCategory->name }} <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                @endforeach

                            </ul>

                            <ul class="location">
                                <li class="heading">Contact</li>

                                <li>
                                    <i class="fa fa-road" aria-hidden="true"></i>

                                    <div class="text text-left">
                                        2A, Idanre Close,
                                        Off Ogun Street,
                                        Osborne Foreshore Estate,
                                        Ikoyi, Lagos.
                                    </div>
                                </li>

                                <li>
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>

                                    <div class="text">Phone:
                                        01 2914775</div>
                                </li>

                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>

                                    <div class="text">Email:
                                        info@ocmlng.com</div>
                                </li>
                            </ul>


                        </div>
