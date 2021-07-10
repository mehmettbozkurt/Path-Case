$(document).ready(function () {
		// Oyun isminde batman geçen oyunlardan indirim olan oyunları listeleyelim
		var settings = {
			"url": "https://www.cheapshark.com/api/1.0/games?title=batman&limit=36&onSale=1&exact=0",
			"method": "GET",
			"timeout": 0,
		};

		$.ajax(settings).done(function (response) {
			// Apiden gelen  oyunları içinde döngü yardımı ile inceleyelim
			$.each(response, function (index, result) {
				// Apiden gelen her oyunun içerisindeki tüm fiyatları id ye göre apiye istek atalım
				var games = {
					"url": "https://www.cheapshark.com/api/1.0/games?id=" + result.gameID,
					"method": "GET",
					"timeout": 0,
				};
				$.ajax(games).done(function (game) {
					// Apiden gelen fiyatlar dizisinin içerisinden en yüksek indirime sahip diziyi bulalım
					game.deals.sort(function (a, b) {
						return a.savings - b.savings;
					});
					var game_price_array = game.deals[game.deals.length - 1];
					// indirim oranını hesaplayalım
					var product_price = game_price_array.price;
					var product_retailPrice = game_price_array.retailPrice;
					var percent = (product_price / product_retailPrice) * 100 - 100;
					if (percent != 0) {
						var percent_line = '<span class="product-discount-label">' + Math.round(percent) + '%</span>';
					} else {
						var percent_line = '';
					}
					$("#products_list").append('' +
							'<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-6">' +
							'<div class="product-grid4">' +
							'<div class="product-image4">' +
							'<a href="#">' +
							'<img class="pic-1" src="' + game.info.thumb + '">' +
							'<img class="pic-2" src="' + game.info.thumb + '">' +
							'</a>' +
							percent_line +
							'</div>' +
							'<div class="product-content">' +
							'<h3 class="title"><a href="#">' + game.info.title + '</a></h3>' +
							'<div class="price">$' + game_price_array.price + '  <span>$' + game_price_array.retailPrice + '</span></div>' +
							'</div>' +
							'</div>' +
							'</div>' + '');

				});
			});


		});

	});
