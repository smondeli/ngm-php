<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>NGM</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
</head>
<script>
    function onLogoutClick() {
        document.cookie = "";
        document.location.href = "/"
    }

    function loadData(selectedCategory) {
        var response = JSON.parse(JSON.stringify(<?php include 'items.php'; echo json_encode($items) ?>))
        var listing = document.getElementById("listing");
        var leftNav = document.getElementById("left-nav");
        listing.innerText = "";
        leftNav.innerText = "";
        const categories = new Set();
        const catDisplay = document.createElement("div");
        catDisplay.className = "header";
        catDisplay.style = "text-align: left;font-size: 18;";
        catDisplay.innerHTML = "Category";
        leftNav.append(catDisplay);
        categories.add("All");
        for (let i in response) {
            let item = response[i]
            let itemName = item.name;
            let itemPrice = item.price;
            categories.add(item.category);

            var itemDiv = document.createElement("div");
            itemDiv.className = "item"
            listing.append(itemDiv);
            if (selectedCategory != "All" && selectedCategory != item.category) {
                itemDiv.style.display = 'none';
            }

            var itemImageDiv = document.createElement("div");
            itemImageDiv.className = "item-image"
            var itemImageSrc = document.createElement("img");
            itemImageSrc.src = "images/" + itemName + ".png"
            itemImageDiv.append(itemImageSrc)
            itemDiv.append(itemImageDiv);

            var itemPriceDiv = document.createElement("div");
            itemPriceDiv.className = "item-price"
            itemPriceDiv.innerText = "$" + itemPrice
            itemDiv.append(itemPriceDiv)

            var itemDescriptionDiv = document.createElement("div");
            itemDescriptionDiv.className = "item-details";
            itemDescriptionDiv.innerText = itemName;
            itemDiv.append(itemDescriptionDiv);

        }
        for (const category of categories) {
            let cat = document.createElement("button");
            cat.className = "category_List";
            cat.addEventListener('click', function () {
                loadData(category);
            });
            cat.innerText = category;
            leftNav.append(cat);
        }
    }
</script>

<body>
<div class="title" id="market">
    <img class="title_img" src="images/logo_transparent.png" height="100%"/>
    <p class="title_p">Neighbourhood Grocery Market</p>
    <div class="right_user_div">
        <img class="title_img" src="images/user.svg" height="100%"/>
        <p float="left" height="100%" class="right_user_div_p">
            Hi, PHP
        </p>
        <a style="padding-left: 10px" href="javascript:onLogoutClick();">
            <img style="float: right" src="images/logout.svg" height="100%" title="Log out"/>
        </a>
    </div>
</div>

<div class="header">Market Place</div>
<div class="main_div">
    <div class="content_div">
        <div id="error_header"
             style="color: red; font-size: 20; display: inline; margin-left: -60px;"></div>
        <div class="left_navigation" id="left-nav">
            <div class="header" style="text-align: left;font-size: large;">
                Category
            </div>
        </div>
        <div class="market_listing" id="listing"></div>
    </div>
</div>

<script>
    loadData("All");
</script>

<div class="footer">
    Powered by <a href="https://www.oracle.com/cloud/">Application created using PHP</a>
</div>
</body>
</html>