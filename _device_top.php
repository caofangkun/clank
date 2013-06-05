<body ng-controller="DeviceCtrl" onload="load()">

  <div class="cl-docs-controls cl-docs-controls--top">
    <div>
      <label for="deviceChoice">Device</label>
      <select ng-model="deviceChoice" id="deviceChoice" ng-options="p.name for p in devices" ng-change="saveDeviceChoice()"></select>
    </div>
    <div>
      <label for="deviceOrientation">Orientation</label>
      <select ng-model="deviceOrientation" id="deviceOrientation"  ng-options="p.name for p in deviceOrientations" ng-change="saveDeviceOrientation()"></select>
    </div>
    <div>
      <label for="deviceSize">Size</label>
      <input type="range" ng-model="deviceSize" min="0.1" max="1" step=".01">
    </div>
  </div>

  <div class="cl-device-frame">
    <div class="cl-phone-wrap" style="-webkit-transform: scale({{deviceSize}}); -moz-transform: scale({{deviceSize}});" data-os="{{ deviceChoice.os | lowercase | removewhitespace }}" data-device="{{ deviceChoice.name | lowercase | removewhitespace }}-{{ deviceOrientation.name | lowercase }}">
      <div class="cl-device-body">

        <div class="cl-ios-status" ng-show="deviceChoice.os == 'iOS'">
          <span>
            <span class="signals">
              <span class="signal1"></span>
              <span class="signal2"></span>
              <span class="signal3"></span>
              <span class="signal4"></span>
              <span class="signal5"></span>
            </span>
            <span class="carrier">Bell</span>
            <!-- <span>Wifi</span> -->
          </span>
          <span class="clock">20:49</span>
          <span>
            <span>3G</span>
            <span class="icon-ios-alarm"></span>
            <span class="icon-ios-locate"></span>
            <span class="icon-ios-lock"></span>
            <span class="icon-ios-battery"></span>
          </span>
        </div>


        <div class="cl-android-status" ng-show="deviceChoice.os == 'Android'">
          <!-- <span>
            <span>Notification</span>
            <span>Notification</span>
            <span>Notification</span>
          </span> -->
          <span>
            <!-- <span>Bluetooth</span> -->
            <span class="icon-android-battery"></span>
            <span class="icon-android-network"></span>
            <span class="icon-android-wifi"></span>
            <span>20:49</span>
          </span>
        </div>
        
        <div class="cl-android-software-buttons" ng-show="deviceChoice.os == 'Android'">
          <span>
            <span>Back</span>
            <span>Home</span>
            <span>Apps</span>
          </span>
        </div>

