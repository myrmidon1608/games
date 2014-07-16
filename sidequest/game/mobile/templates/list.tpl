			
            <div data-role="header" data-theme="a" class="center">
			<img src="../../../images/logo/sideQUEST-logo.png" style="width:240px; height:75px;" alt="sideQUEST" />
			</div>
            <div data-role="content" data-theme="a">
                <div>
                {if $greet}
                    <div data-role="button" align="center" data-icon="refresh" data-iconpos="right" onclick="location.href='index.php?state=list';">
                    {$greet}Task List
                    </div>
                {/if}
                </div><hr>
            	{if $cpl}<h4>{$cpl}</h4>{/if}
            	{if $nt}<h4>{$nt}</h4>{/if}
                {section name = tasks loop = $tasks}
                <div data-role="collapsible">         
                <h4>{$tasks[tasks].name}</h4>
                    <div style="text-align:justify; margin:5% 0%;">{$tasks[tasks].desc}</div>
                    <div data-role="button" style="width:125px; margin:0 auto;" onclick="location.href='index.php?state=list&task={$tasks[tasks].id}';">Submit</div>
                </div>
                {/section}
                <div data-role="button" style="width:125px; margin:30px auto;" align="center" data-theme="a" onclick="location.href='index.php?state=login';"></div>
            </div>
            <div data-role="footer" class="center">
            <p>&copy; 2012</p>
            </div>
