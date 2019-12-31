<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Vinci
		</title>
		<meta name="description" content="Datatable HTML table">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
        
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="<?php echo ROOT_PATH;?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo ROOT_PATH;?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="<?php echo ROOT_PATH;?>assets/demo/default/media/img/logo/favicon_1.ico" />
	</head>
	<!-- end::Head -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
       
        <?php 
        
             
        include('inc/navbar.php');
            include(strtolower($view)); 
          ?>
        
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="<?php echo ROOT_PATH;?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="<?php echo ROOT_PATH;?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<script src="<?php echo ROOT_PATH;?>assets/snippets/pages/user/login.js" type="text/javascript"></script>
		<script src="<?php echo ROOT_PATH;?>assets/demo/default/custom/components/forms/wizard/wizard.js" type="text/javascript"></script>
		<script src="<?php echo ROOT_PATH;?>assets/demo/default/custom/components/datatables/base/html-table.js" type="text/javascript"></script>
        <script src="<?php echo ROOT_PATH;?>assets/demo/default/custom/components/forms/widgets/bootstrap-select.js" type="text/javascript"></script> 
        <script type="text/javascript">                                        
    ; (function ($, window, document, undefined) {
    $.fn.chainedTo = function (parentSelector = "",debugRules = false) {
        var $child = $(this);
        var thisChildId = "#" + $child[0].id;

        function setIdChild($id, childId) {
            if (typeof $id.data('updateChild') === 'undefined') {
                $id.attr('data-update-child', childId);
            } else {
                $id.attr('data-update-child', $id.attr('data-update-child') + ',' + childId);
            }
        };
        function setIdParent($id, parentId) {
            if (typeof $id.data('selectParent') === 'undefined') {
                $id.data('selectParent', new Array(parentId.split(",")));
            } else {
                $id.data('selectParent', $id.data('selectParent').concat(parentId.split(",")));
            }
        };
        function saveIdOldState($id) {
            if (typeof $id.data('old-state') === 'undefined') {
                $id.data('old-state', $id.html());
            }
        };

        function matchRule(str, rules, debugRules = false) {
            if (debugRules) console.log('      Parent values to match: ' + str);
            if (debugRules) console.log("      Rules to match with: " + rules);
            var ruleArr = rules;
            
            for (let i = 0; i < ruleArr.length; i++) {
                let thisRuleText = ruleArr[i].split("*").join(".*").split("+").join("\\+");
                let thisRule = new RegExp(thisRuleText);
                if (debugRules) console.log("      - Checking with RegExp: " + thisRule);

                if (thisRule.test(str)) {
                    if (debugRules) console.log("      # MATCHED on rule: " + thisRule);
                    return true;
                }
            }
            if (debugRules) console.log("      # NO MATCH found");
            return false;
        };
        function updateSelections($id) {
            //restore the original state for this select
            $id.html($id.data('old-state'));
            if ($id.attr('data-debug-rules') == "true") {
                var debugRules = true;
            }
            //get the current value of the parents we want to match, join with '+'
            if (typeof $id.data('selectParent') === 'undefined')
                return true;
            var parentVal = $($id.data('selectParent').join(",")).map(function () {
                return this.value;
            }).get().join("+");
            var newInnerHTML = [];
            //loop through each of the select options and remove where the parent value is not found
            if (debugRules) console.log("==> Evaluating select id: #" +$id.attr('id'));
            $id.children().each(function (k, value) {
                if (debugRules) console.log  (" -> Evaluating select option with text: " + value.innerText.trim());
                if (matchRule(parentVal, value.getAttribute('data-available-with').split(","), debugRules)) {
                    newInnerHTML += (value.outerHTML);
                }
            });
            $id.html(newInnerHTML);


        };


        function ClickTab(e) {
            if (typeof $(e.target).attr('data-update-child') === 'undefined')
                return true;

            //get and split the children. For each of those, update the valid selections.
            for (let i = 0; i < $(e.target).attr('data-update-child').split(",").length; i++) {
                updateSelections($($(e.target).attr('data-update-child').split(",")[i]));
            }
            return false;
        };

        //Save the original state of the select in a datafield
        saveIdOldState($child);
//        console.log($(parentSelector));

        //enabling rules debug if requested
        if (debugRules) $child.attr('data-debug-rules', 'true');

        //configure a change trigger on the parent selector
        $(parentSelector).filter(function () {
            return $(this).data('updateChild') === undefined;
        }).change(ClickTab);

        //add a data record to the parent that links it to the child
        $(parentSelector).each(function (k, v) {
            setIdChild($(v), thisChildId);
//            console.log("parentSelector each value: ", $(v));
        });

        //add a data record to the child that links it to the parent.
        setIdParent($child, parentSelector);

        //update the selections right now.
        updateSelections($child);


        // return jQuery object
        return this;
    };


})(jQuery, window, document);


                                            </script>
        <script>
        $("#projet").chainedTo("#niveau");
        $("#etudiant").chainedTo("#niveau");
        </script>
        <script>
        $("#tech").chainedTo("#categorie");
        </script>
        <script src="<?php echo ROOT_PATH;?>assets/demo/default/custom/components/base/toastr.js" type="text/javascript"></script> 
    </body>
</html>

            