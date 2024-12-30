<form class="user-info-form grid-2">
  <div>
    <label for="first-name">Adınız*</label>
    <input type="text" id="first-name" class="se-input-text" placeholder="Adınızı girin" />
  </div>
  <div>
    <label for="last-name">Soyadınız*</label>
    <input type="text" id="last-name" class="se-input-text" placeholder="Soyadınızı girin" />
  </div>
  <div>
    <label for="country">Ülke</label>
    <select id="country" class="se-input-text">
      <option value="Türkiye">Türkiye</option>
    </select>
  </div>
  <div>
    <label for="city">Şehir</label>
    <select id="city" class="se-input-text">
      <option value="">Şehir Seçiniz</option>
    </select>
  </div>
  <div>
    <label for="district">İlçe</label>
    <select id="district" class="se-input-text">
      <option value="">İlçe Seçiniz</option>
    </select>
  </div>
  <div>
    <label for="phone">Cep Telefonunuz</label>
    <div>
      <select class="se-input-text">
        <option value="+90">🇹🇷 +90</option>
      </select>
      <input type="tel" id="phone" class="se-input-text" placeholder="+905XXXXXXXXX" />
    </div>
  </div>
  <div>
    <label for="email">E-posta Adresiniz</label>
    <input type="email" id="email" class="se-input-text" placeholder="E-postanızı girin" />
  </div>
  <div>
    <label>Cinsiyet</label>
    <div class="d-flex">
      <label>
        <input type="radio" name="gender" class="se-input-checkbox bounce" /> Kadın
      </label>
      <label>
        <input type="radio" name="gender" class="se-input-checkbox bounce" /> Erkek
      </label>
      <label>
        <input type="radio" name="gender" class="se-input-checkbox bounce" checked /> Belirtmek İstemiyorum
      </label>
    </div>
  </div>
  <div>
    <label>Doğum Tarihi</label>
    <div>
      <select class="se-input-text">
        <option value="1">1</option>
        <option value="2">2</option>
        <!-- Daha fazla seçenek eklenebilir -->
      </select>
      <select class="se-input-text">
        <option value="1">1</option>
        <option value="2">2</option>
        <!-- Daha fazla seçenek eklenebilir -->
      </select>
      <select class="se-input-text">
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <!-- Daha fazla seçenek eklenebilir -->
      </select>
    </div>
  </div>
  <div>
    <label>
      <input type="checkbox" class="se-input-checkbox bounce" /> Doğum Tarihi Belirtmek İstemiyorum
    </label>
  </div>
  <div>
    <label>
      <input type="checkbox" class="se-input-checkbox bounce" /> Kampanya, duyuru, bilgilendirmelerden e-posta ile haberdar olmak istiyorum.
    </label>
  </div>
  <div>
    <label>
      <input type="checkbox" class="se-input-checkbox bounce" /> Kampanya, duyuru, bilgilendirmelerden SMS ile haberdar olmak istiyorum.
    </label>
  </div>
  <div class="buttons">
    <button type="button" class="delete-button">Üyelik Bilgilerimi Sil</button>
    <button type="submit" class="save-button">Kaydet</button>
  </div>
</form>
