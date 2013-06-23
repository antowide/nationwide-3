
<!-- [property-search.php] -->

<div class="span12 prop-search">
  <h3>Property Search</h3>
  <p>Please filter your search by choosing either <em>residential</em> or <em>commercial</em> from the tabs below.</p>
  <div>
    <ul id="myTab" class="nav nav-tabs">
      <li class="dropdown active">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Residential <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#resi-buy" data-toggle="tab">To Buy</a></li>
          <li><a href="#resi-rent" data-toggle="tab">To Rent</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Commercial <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#com-buy" data-toggle="tab">To Buy</a></li>
          <li><a href="#com-let" data-toggle="tab">To Let</a></li>
        </ul>
      </li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade in active" id="resi-buy">
          <div class="span3">
            <dl>
                <dt>Search Type:</dt>
                <dd>Residential property, to buy</dd>
            </dl>
            <form>
              <label for="inputAreaResiBuy">Area</label>
              <input type="text" id="inputAreaResiBuy" placeholder="Area">
              <fieldset>
                    <legend>Price range</legend>
                    <label for="min1">Minimum price:</label>
                    <select id="min1" name="min1">
                        <option value="0" selected="">No lower limit</option>
                        <option value="100000">&pound;100,000</option>
                        <option value="200000">&pound;200,000</option>
                        <option value="300000">&pound;300,000</option>
                        <option value="400000">&pound;400,000</option>
                        <option value="500000">&pound;500,000</option>
                        <option value="600000">&pound;600,000</option>
                        <option value="700000">&pound;700,000</option>
                        <option value="800000">&pound;800,000</option>
                        <option value="900000">&pound;900,000</option>
                    </select>
                    
                    <label for="max1">Maximum price:</label>
                    <select id="max1" name="max1">
                        <option value="100000">£100,000</option>
                        <option value="200000">£200,000</option>
                        <option value="300000">£300,000</option>
                        <option value="400000">£400,000</option>
                        <option value="500000">£500,000</option>
                        <option value="600000">£600,000</option>
                        <option value="700000">£700,000</option>
                        <option value="800000">£800,000</option>
                        <option value="900000">£900,000</option>
                        <option value="0" selected="">No higher limit</option>
                    </select>
              </fieldset>
              <label for="bed1">No. bedrooms:</label>
                    <select id="bed1" name="bed1">
                        <option value="any">Any</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
              <button type="submit" class="btn btn-large btn-primary">Search</button>
            </form>
          </div>  
      </div>
      <div class="tab-pane fade" id="resi-rent">
          <div class="span3">
            <dl>
                <dt>Search Type:</dt>
                <dd>Residential property, to rent</dd>
            </dl>
            <form>
              <label for="inputAreaResiRent">Area</label>
              <input type="text" id="inputAreaResiRent" placeholder="Area">
              <fieldset>
                    <legend>Price range</legend>
                    <label for="min2">Minimum price:</label>
                    <select id="min2" name="min2">
                        <option value="0" selected="">No lower limit</option>
                        <option value="100000">&pound;100,000</option>
                        <option value="200000">&pound;200,000</option>
                        <option value="300000">&pound;300,000</option>
                        <option value="400000">&pound;400,000</option>
                        <option value="500000">&pound;500,000</option>
                        <option value="600000">&pound;600,000</option>
                        <option value="700000">&pound;700,000</option>
                        <option value="800000">&pound;800,000</option>
                        <option value="900000">&pound;900,000</option>
                    </select>
                    
                    <label for="max2">Maximum price:</label>
                    <select id="max2" name="max2">
                        <option value="100000">£100,000</option>
                        <option value="200000">£200,000</option>
                        <option value="300000">£300,000</option>
                        <option value="400000">£400,000</option>
                        <option value="500000">£500,000</option>
                        <option value="600000">£600,000</option>
                        <option value="700000">£700,000</option>
                        <option value="800000">£800,000</option>
                        <option value="900000">£900,000</option>
                        <option value="0" selected="">No higher limit</option>
                    </select>
              </fieldset>
              <label for="bed2">No. bedrooms:</label>
                    <select id="bed2" name="bed2">
                        <option value="any">Any</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
              <button type="submit" class="btn btn-large btn-primary">Search</button>
            </form>
          </div>
      </div>
      <div class="tab-pane fade" id="com-buy">
        <div class="span3">
            <dl>
                <dt>Search Type:</dt>
                <dd>Commercial property, to buy</dd>
            </dl>
            <form>
              <label for="inputAreaComBuy">Area</label>
              <input type="text" id="inputAreaComBuy" placeholder="Area">
              <fieldset>
                    <legend>Price range</legend>
                    <label for="min3">Minimum price:</label>
                    <select id="min3" name="min3">
                        <option value="0" selected="">No lower limit</option>
                        <option value="100000">&pound;100,000</option>
                        <option value="200000">&pound;200,000</option>
                        <option value="300000">&pound;300,000</option>
                        <option value="400000">&pound;400,000</option>
                        <option value="500000">&pound;500,000</option>
                        <option value="600000">&pound;600,000</option>
                        <option value="700000">&pound;700,000</option>
                        <option value="800000">&pound;800,000</option>
                        <option value="900000">&pound;900,000</option>
                    </select>
                    
                    <label for="max3">Maximum price:</label>
                    <select id="max3" name="max3">
                        <option value="100000">£100,000</option>
                        <option value="200000">£200,000</option>
                        <option value="300000">£300,000</option>
                        <option value="400000">£400,000</option>
                        <option value="500000">£500,000</option>
                        <option value="600000">£600,000</option>
                        <option value="700000">£700,000</option>
                        <option value="800000">£800,000</option>
                        <option value="900000">£900,000</option>
                        <option value="0" selected="">No higher limit</option>
                    </select>
              </fieldset>
              <button type="submit" class="btn btn-large btn-primary">Search</button>
            </form>
        </div>
      </div>
      <div class="tab-pane fade" id="com-let">
        <div class="span3">
            <dl>
                <dt>Search Type:</dt>
                <dd>Commercial property, to let</dd>
            </dl>
            <form>
              <label for="inputAreaComLet">Area</label>
              <input type="text" id="inputAreaComLet" placeholder="Area">
              <fieldset>
                    <legend>Price range</legend>
                    <label for="min4">Minimum price:</label>
                    <select id="min4" name="min4">
                        <option value="0" selected="">No lower limit</option>
                        <option value="100000">&pound;100,000</option>
                        <option value="200000">&pound;200,000</option>
                        <option value="300000">&pound;300,000</option>
                        <option value="400000">&pound;400,000</option>
                        <option value="500000">&pound;500,000</option>
                        <option value="600000">&pound;600,000</option>
                        <option value="700000">&pound;700,000</option>
                        <option value="800000">&pound;800,000</option>
                        <option value="900000">&pound;900,000</option>
                    </select>
                    
                    <label for="max4">Maximum price:</label>
                    <select id="max4" name="max4">
                        <option value="100000">£100,000</option>
                        <option value="200000">£200,000</option>
                        <option value="300000">£300,000</option>
                        <option value="400000">£400,000</option>
                        <option value="500000">£500,000</option>
                        <option value="600000">£600,000</option>
                        <option value="700000">£700,000</option>
                        <option value="800000">£800,000</option>
                        <option value="900000">£900,000</option>
                        <option value="0" selected="">No higher limit</option>
                    </select>
              </fieldset>
              <button type="submit" class="btn btn-large btn-primary">Search</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- [/property-search.php] -->

