function showFields(){

	var category = document.getElementById("categoryId").value;
	var sport = document.getElementById("sportId").value;

	var gender = document.getElementById("genderGroup");
	var shifts = document.getElementById("shiftGroup");
	var suplements = document.getElementById("suplementGroup");
	var volume = document.getElementById("volumeGroup");
	var size = document.getElementById("sizeGroup");
	var wheels = document.getElementById("wheelsGroup");
	var weight = document.getElementById("weightGroup");

	// Show gender if category distinct initial or suplements
	if(category == 2 || category == 0){
		gender.style.display = "none";
	}else{
		gender.style.display = "block";
	}

	// Show sifts if sports is bike
	if(sport == 3){
		shifts.style.display = "block";
	}else{
		shifts.style.display = "none";
	}

	// Show type of suplements and volume if category is suplements
	if(category == 2){
		suplements.style.display = "block";
		volume.style.display = "block";
	}else{
		suplements.style.display = "none";
		volume.style.display = "none";
	}

	// Show size if category is clothes
	if(category == 1){
		size.style.display = "block";
	}else{
		size.style.display = "none";
	}

	// Show wheels and weight if category is vehicles
	if(category == 3){
		wheels.style.display = "block";
		weight.style.display = "block";
	}else{
		wheels.style.display = "none";
		weight.style.display = "none";
	}

}

// Validate form new/edit product
function validateFormProduct(){

	// Error
	var textFieldNull = "This field can not be blank";
	var textChooseValidOption = "Select a valid option";
	var textOnlyNumbers = "This field only allows numbers";
	var textOnlyNumbersInt = "This field only allows integer numbers";
	var textNoBenefits = "Are you sure you do not want to get benefits?";
	var textNoUnder0 = "This field has to be above 0";
	var textInvalidFormat = "Invalid format (Allow: JPEG | JPG | PNG)";
	var textInvalidSize = "Maximum size allowed 2MB";

	// Patterns
	var onlyNumbers = /^[0-9]+([,][0-9]{1,2})?$/;
	var onlyNumbersInt = /^[0-9]?$/;
	var format = /\.(jpg|png|jpeg)$/;

	// Name
	var fieldName = document.getElementById("name");
	var valueName = document.getElementById("name").value;
	if(valueName == null || valueName.length == 0 || valueName.trim()==""){
		var error = document.getElementById("errorNameProduct");
		error.innerHTML = textFieldNull;
		fieldName.focus();
		return false;
	}

	// Short Description
	var fieldShortDescription = document.getElementById("shortDescription");
	var valueShortDescription = document.getElementById("shortDescription").value;
	if(valueShortDescription == null || valueShortDescription.length == 0 || valueShortDescription.trim()==""){
		var error = document.getElementById("errorShortDescription");
		error.innerHTML = textFieldNull;
		fieldShortDescription.focus();
		return false;
	}

	// Description
	var fieldDescription = document.getElementById("description");
	var valueDescription = document.getElementById("description").value;
	if(valueDescription == null || valueDescription.length == 0 || valueDescription.trim()==""){
		var error = document.getElementById("errorDescription");
		error.innerHTML = textFieldNull;
		fieldDescription.focus();
		return false;
	}

	// Category
	var fieldCategory = document.getElementById("categoryId");
	var valueCategory = document.getElementById("categoryId").value;
	if(valueCategory == 0){
		var error = document.getElementById("errorCategory");
		error.innerHTML = textChooseValidOption;
		fieldCategory.focus();
		return false;
	}

	// Subcategory
	var fieldSubcategory = document.getElementById("subcategoryId");
	var valueSubcategory = document.getElementById("subcategoryId").value;
	if(valueSubcategory == 0){
		var error = document.getElementById("errorSubcategory");
		error.innerHTML = textChooseValidOption;
		fieldSubcategory.focus();
		return false;
	}

	// Gender
	var fieldGender = document.getElementById("gender");
	var valueGender = document.getElementById("gender").value;
	if(valueGender == 0 && valueCategory != 2){
		var error = document.getElementById("errorGender");
		error.innerHTML = textChooseValidOption;
		fieldGender.focus();
		return false;
	}

	// Size
	var fieldSize = document.getElementById("size");
	var valueSize = document.getElementById("size").value;
	if(valueSize == 0 && valueCategory == 1){
		var error = document.getElementById("errorSize");
		error.innerHTML = textChooseValidOption;
		fieldSize.focus();
		return false;
	}

	// Sport
	var fieldSport = document.getElementById("sportId");
	var valueSport = document.getElementById("sportId").value;
	if(valueSport == 0){
		var error = document.getElementById("errorSport");
		error.innerHTML = textChooseValidOption;
		fieldSport.focus();
		return false;
	}

	// Price
	var fieldPrice = document.getElementById("basePrice");
	var valuePrice = document.getElementById("basePrice").value;
	if(valuePrice == null || valuePrice.length == 0 || valuePrice.trim()==""){
		var error = document.getElementById("errorPrice");
		error.innerHTML = textFieldNull;
		fieldPrice.focus();
		return false;
	}else if(valuePrice <= 0){
		var error = document.getElementById("errorPrice");
		error.innerHTML = textNoBenefits;
		fieldPrice.focus();
		return false;
	}else if(onlyNumbers.test(valuePrice) == false){
		var error = document.getElementById("errorPrice");
		error.innerHTML = textOnlyNumbers;
		fieldPrice.focus();
		return false;
	}

	// Brand
	var fieldBrand = document.getElementById("brandId");
	var valueBrand = document.getElementById("brandId").value;
	if(valueBrand == null || valueBrand.length == 0 || valueBrand.trim()==""){
		var error = document.getElementById("errorBrand");
		error.innerHTML = textFieldNull;
		fieldBrand.focus();
		return false;
	}

	// Type suplement and volume
	var fieldTypeSuplement = document.getElementById("typeSuplement");
	var valueTypeSuplement = document.getElementById("typeSuplement").value;
	var fieldVolume = document.getElementById("volume");
	var valueVolume = document.getElementById("volume").value;
	if(valueCategory == 2){
		if(valueTypeSuplement == null || valueTypeSuplement.length == 0 || valueTypeSuplement.trim()==""){
			var error = document.getElementById("errorTypeSuplement");
			error.innerHTML = textFieldNull;
			fieldTypeSuplement.focus();
			return false;
		}else if(valueVolume == null || valueVolume.length == 0 || valueVolume.trim()==""){
			var error = document.getElementById("errorVolume");
			error.innerHTML = textFieldNull;
			fieldVolume.focus();
			return false;
		}else if(valueVolume <= 0){
			var error = document.getElementById("errorVolume");
			error.innerHTML = textNoUnder0;
			fieldVolume.focus();
			return false;
		}else if(onlyNumbers.test(valueVolume) == false){
			var error = document.getElementById("errorVolume");
			error.innerHTML = textOnlyNumbers;
			fieldVolume.focus();
			return false;
		}
	}

	// Shifts
	var fieldShifts = document.getElementById("shifts");
	var valueShifts = document.getElementById("shifts").value;
	if(valueCategory == 3 && valueSport == 3){
		if(valueShifts == null || valueShifts.length == 0 || valueShifts.trim()==""){
			var error = document.getElementById("errorShifts");
			error.innerHTML = textFieldNull;
			fieldShifts.focus();
			return false;
		}else if(valueShifts <= 0){
			var error = document.getElementById("errorShifts");
			error.innerHTML = textNoUnder0;
			fieldShifts.focus();
			return false;
		}else if(onlyNumbersInt.test(valueShifts) == false){
			var error = document.getElementById("errorShifts");
			error.innerHTML = textOnlyNumbersInt;
			fieldShifts.focus();
			return false;
		}
	}

	// Wheels amount and weight
	var fieldWheelsAmount = document.getElementById("wheelsAmount");
	var valueWheelsAmount = document.getElementById("wheelsAmount").value;
	var fieldWeight = document.getElementById("weight");
	var valueWeight = document.getElementById("weight").value;
	if(valueCategory == 3){
		if(valueWheelsAmount == null || valueWheelsAmount.length == 0 || valueWheelsAmount.trim()==""){
			var error = document.getElementById("errorWheelsAmount");
			error.innerHTML = textFieldNull;
			fieldWheelsAmount.focus();
			return false;
		}else if(valueWheelsAmount <= 0){
			var error = document.getElementById("errorWheelsAmount");
			error.innerHTML = textNoUnder0;
			fieldWheelsAmount.focus();
			return false;
		}else if(onlyNumbersInt.test(valueWheelsAmount) == false){
			var error = document.getElementById("errorWheelsAmount");
			error.innerHTML = textOnlyNumbersInt;
			fieldWheelsAmount.focus();
			return false;
		}

		if(valueWeight == null || valueWeight.length == 0 || valueWeight.trim()==""){
			var error = document.getElementById("errorWeight");
			error.innerHTML = textFieldNull;
			fieldWeight.focus();
			return false;
		}else if(valueWeight <= 0){
			var error = document.getElementById("errorWeight");
			error.innerHTML = textNoUnder0;
			fieldWeight.focus();
			return false;
		}else if(onlyNumbers.test(valueWeight) == false){
			var error = document.getElementById("errorWeight");
			error.innerHTML = textOnlyNumbers;
			fieldWeight.focus();
			return false;
		}
	}

	// Image
	// Image
	var fieldImage = document.getElementById("nameImg");
	var valueImage = document.getElementById("nameImg").value;
	var error = document.getElementById("errorImage");
	var imageProduct = fieldImage.files[0];
	if(valueImage == null || valueImage.length == 0 || valueImage.trim()==""){
		error.innerHTML = textFieldNull;
		fieldImage.focus();
		return false;
	}

	if(format.test(imageProduct.name) == false){
		error.innerHTML = textInvalidFormat;
		return false;
	}
	// Size in bytes (2MB)
	if(imageProduct.size > 2e+6){
		error.innerHTML = textInvalidSize;
		return false;
	}

}

// Validate form new/edit category
function validateFormCategory(){

	// Error
	var textFieldNull = "This field can not be blank";
	var textOnlyNumbers = "This field only allows numbers";
	var textOnlyLetters = "This field only allows letters";
	var textNoUnder0 = "This field has to be above 0";

	// Patterns
	var onlyNumbers = /^[0-9]+([,][0-9]{1,2})?$/;
	var onlyLetters = /^[a-zA-ZÀ-ÿ\u00f1\u00d1\u00E0\u00FC\s]+$/;

	// Name
	var fieldName = document.getElementById("name");
	var valueName = document.getElementById("name").value;
	if(valueName == null || valueName.length == 0 || valueName.trim()==""){
		var error = document.getElementById("errorNameCategory");
		error.innerHTML = textFieldNull;
		fieldName.focus();
		return false;
	}else if(onlyLetters.test(valueName) == false){
		var error = document.getElementById("errorNameCategory");
		error.innerHTML = textOnlyLetters;
		fieldName.focus();
		return false;
	}

	// Taxes
	var fieldTaxes = document.getElementById("taxes");
	var valueTaxes = document.getElementById("taxes").value;
	if(valueTaxes == null || valueTaxes.length == 0 || valueTaxes.trim()==""){
		var error = document.getElementById("errorTaxes");
		error.innerHTML = textFieldNull;
		fieldTaxes.focus();
		return false;
	}else if(valueTaxes <= 0){
		var error = document.getElementById("errorTaxes");
		error.innerHTML = textNoUnder0;
		fieldTaxes.focus();
		return false;
	}else if(onlyNumbers.test(valueTaxes) == false){
		var error = document.getElementById("errorTaxes");
		error.innerHTML = textOnlyNumbers;
		fieldTaxes.focus();
		return false;
	}

}

// Validate form new/edit subcategory
function validateFormSubcategory(){

	// Error
	var textInvalidFormat = "Invalid format (Allow: JPEG | JPG | PNG)";
	var textInvalidSize = "Maximum size allowed 2MB";
	var textFieldNull = "This field can not be blank";
	var textOnlyLetters = "This field only allows letters";
	var textChooseValidOption = "Select a valid option";

	// Pattern
	var format = /\.(jpg|png|jpeg)$/;
	var onlyLetters = /^[a-zA-ZÀ-ÿ\u00f1\u00d1\u00E0\u00FC\s]+$/;

	// Name
	var fieldName = document.getElementById("name");
	var valueName = document.getElementById("name").value;
	if(valueName == null || valueName.length == 0 || valueName.trim()==""){
		var error = document.getElementById("errorNameSubcategory");
		error.innerHTML = textFieldNull;
		fieldName.focus();
		return false;
	}else if(onlyLetters.test(valueName) == false){
		var error = document.getElementById("errorNameSubcategory");
		error.innerHTML = textOnlyLetters;
		fieldName.focus();
		return false;
	}

	// Category
	var fieldCategory = document.getElementById("categoryId");
	var valueCategory = document.getElementById("categoryId").value;
	if(valueCategory == 0){
		var error = document.getElementById("errorCategory");
		error.innerHTML = textChooseValidOption;
		fieldCategory.focus();
		return false;
	}

	// Image
	var fieldImage = document.getElementById("imagePath");
	var valueImage = document.getElementById("imagePath").value;
	var error = document.getElementById("errorImage");
	var imageSubcategorie = fieldImage.files[0];
	if(valueImage == null || valueImage.length == 0 || valueImage.trim()==""){
		error.innerHTML = textFieldNull;
		fieldImage.focus();
		return false;
	}

	if(format.test(imageSubcategorie.name) == false){
		error.innerHTML = textInvalidFormat;
		return false;
	}
	// Size in bytes (2MB)
	if(imageSubcategorie.size > 2e+6){
		error.innerHTML = textInvalidSize;
		return false;
	}

}
