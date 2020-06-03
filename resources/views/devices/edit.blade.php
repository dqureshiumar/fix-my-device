@extends('pages.app')
@section('pagetitle','Select the Devices you have at your home')
@section('content')
<br><br><br><br><br><br>
    <div class="container">
        <h1 align="center">
            Select the Deivces you have at your home
        </h1>
        <ul>
            <form action="{{ route('mydevice.update') }}" method="POST">
                @csrf
                <li><input type="checkbox" name="desktop" value="1" id="cb1" />
                  <label for="cb1"><img src="icons/desktop.jpg" />Desktop</label>
                </li>
                <li><input type="checkbox" name="laptop" id="cb2" value="1" />
                  <label for="cb2"><img src="icons/laptop.jpg" />Laptop</label>
                </li>
                <li><input type="checkbox" value="1" id="cb3" name="printer"/>
                  <label for="cb3"><img src="icons/printer.jpg" />Printer</label>
                </li>
                <li><input type="checkbox" value="1" name="wifi" id="cb4" />
                  <label for="cb4"><img src="icons/wifi.png" />Wifi</label>
                </li>
                <li><input type="checkbox" value="1" name="router" id="cb5" />
                    <label for="cb5"><img src="icons/router.jpg" />Router</label>
                </li>
                <li><input type="checkbox" value="1" name="tablet" id="cb6" />
                    <label for="cb6"><img src="icons/tablet.jpg" />Tablet</label>
                </li>
                <li><input type="checkbox" value="1" name="mobile" id="cb7" />
                    <label for="cb7"><img src="icons/mobile.jpg "/>Mobile</label>
                </li>
                <li><input type="checkbox" value="1" name="server" id="cb8" />
                    <label for="cb8"><img src="icons/server.png" />Server</label>
                </li>
                <li><input type="checkbox" value="1" name="firewall" id="cb9" />
                    <label for="cb9"><img src="icons/firewall.jpg" />Firewall</label>
                </li>
                <li><input type="checkbox" value="1" name="storage" id="cb10" />
                    <label for="cb10"><img src="icons/storage.jpg" />Storage</label>
                </li>
                <li><input type="checkbox" value="1" name="ups" id="cb11" />
                    <label for="cb11"><img src="icons/ups.jpg" />UPS</label>
                </li>
                <li><input type="checkbox" value="1" name="ipphone" id="cb12" />
                    <label for="cb12"><img src="icons/ipphone.png" />IP Phone</label>
                </li>
                <li><input type="checkbox" value="1" name="switch" id="cb13" />
                    <label for="cb13"><img src="icons/switch.jpg" />Switch</label>
                </li>
                <li><input type="checkbox" value="1" name="other" id="cb14" />
                    <label for="cb14"><img src="icons/other.png" />Other</label>
                </li>
              </ul><br><br>
              <div align="center">
                <button type="submit" class="btn btn-secondary"">Submit</button>
              </div><br><br>
            </form>
    </div>

        <style>
        ul {
        list-style-type: none;
        }

        li {
        display: inline-block;
        }

        input[type="checkbox"][id^="cb"] {
        display: none;
        }

        label {
        border: 1px solid #fff;
        padding: 10px;
        display: block;
        position: relative;
        margin: 10px;
        cursor: pointer;
        }

        label:before {
        background-color: white;
        color: white;
        content: " ";
        display: block;
        border-radius: 50%;
        border: 1px solid grey;
        position: absolute;
        top: -5px;
        left: -5px;
        width: 25px;
        height: 25px;
        text-align: center;
        line-height: 28px;
        transition-duration: 0.4s;
        transform: scale(0);
        }

        label img {
        height: 100px;
        width: 100px;
        transition-duration: 0.2s;
        transform-origin: 50% 50%;
        }

        :checked + label {
        border-color: #ddd;
        }

        :checked + label:before {
        content: "✓";
        background-color: grey;
        transform: scale(1);
        }

        :checked + label img {
        transform: scale(0.9);
        box-shadow: 0 0 5px #333;
        z-index: -1;
        }
        </style>


@endsection