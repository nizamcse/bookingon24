$(document).ready(function(){
    /**
     * Location Search Typeahead
     * @param strs
     * @returns {findMatches}
     */
    var substringMatcher = function(strs) {
        return function findMatches(q, cb) {
            var matches, substringRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {
                    matches.push(str);
                }
            });

            cb(matches);
        };
    };

    $.get('api/locations', function(data){
        $('#from').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            },
            {
                name: 'states',
                source: substringMatcher(data)
            });
        $('#to').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            },
            {
                name: 'states',
                source: substringMatcher(data)
            });
    },'json');

    /**
     * Boarding Point Typeahead
     */


    var $boardingId = document.getElementById('boarding-points')

    if($boardingId){
        console.log("Done");
        var citynames = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                url: 'api/boardings',
                filter: function(list) {
                    return $.map(list, function(cityname) {
                        return cityname;
                    });
                }
            }
        });
        citynames.initialize();
        $('#boarding-points').tagsinput({
            typeaheadjs: {
                name: 'citynames',
                displayKey: 'name',
                valueKey: 'name',
                source: citynames.ttAdapter()
            }
        });
    }


});