<p>
  The <?=$pageName?> results page displays the project files used to <?=($pageName == "live") ? "deploy the algorithm" : "run the backtest" ?>. To view the files, click the <span class='tab-name'>Code</span> tab. By default, the <span class='public-file-name'>main.py</span> or <span class='public-file-name'>Main.cs</span> file displays. To view other files in the project, click the file name and then select a different file from the drop-down menu.
</p>

<img class='docs-image' alt="Algorithm code snippets" src='<?=($pageName == "live") ? "https://cdn.quantconnect.com/i/tu/live-project-files.png" : "https://cdn.quantconnect.com/i/tu/backtest-results-project-files.png" ?>'>
