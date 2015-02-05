GameRulesName = "$8000" --Resource race
Description = "$8001"  --The first player to reach the specified Target Resources wins.\nWinner take all!
Directories =
{
    Levels = "data:LevelData\\Multiplayer\\ResourceRace\\",
    AI = "data:AI\\",
}

GameSetupOptions =
{
    -- options specific to ResourceRace gametype
    {
        name = "targetresources",
        locName = "$8060",
        tooltip = "$8065",
        default = 0,
        visible = 1,
        choices =
        {
            "$8061",  "2000",
            "$8062",  "5000",
            "$8063",  "10000",
            "$8064",  "15000",
        },
    },
}

dofilepath("data:scripts/scar/restrict.lua")

resourcesNeeded               = 0

-- Parameter indices
--
RRPI_PlayerName         = 0
RRPI_PlayerProgress     = 1
RRPI_PlayerColour       = 2
RRPN_Parameters         = 3
-- rule entry point
function OnInit()

	-- restrict options for tuning resons for each player
	MPRestrict();
	
    resourcesNeeded = GetGameSettingAsNumber("targetresources")

	-- add this rule
	Rule_Add("MainRule")

    --load ATI templates specific to these game rules
    ATI_LoadTemplates("data:LevelData\\Multiplayer\\ResourceRace\\ATI.lua")
end


-- main rule to call for this game type
function MainRule()

	local playerIndex = 0;
	local playerCount = Universe_PlayerCount();

    -- kill any dead players	
	while (playerIndex < playerCount) do
		if (Player_IsAlive(playerIndex) == 1 and
			Player_HasShipWithBuildQueue(playerIndex)==0) then
			-- kill this player
			Player_Kill(playerIndex)
		end
		-- go to next player
		playerIndex = playerIndex+1
	end
		
	local gameOver = 0;
    local victoriousPlayer = 0;
	
    -- see if any player has reached the target resource amount.  Note that if two players
    -- reach the target in the same frame, the player who is integrally first will win.
    playerIndex = 0
    while (playerIndex < playerCount) do
        if (Player_IsAlive(playerIndex) == 1) then
            if (Player_GetRU(playerIndex) >= resourcesNeeded) then
                gameOver = 1
                victoriousPlayer = playerIndex
            end
        end
		
		-- go to next player
		playerIndex = playerIndex+1
    end

    -- if the game is over, kill all other players and end the game
    if (gameOver == 1) then
        playerIndex = 0;
        while (playerIndex < playerCount) do
            if (playerIndex ~= victoriousPlayer) then
                Player_Kill(playerIndex)
            end
            playerIndex = playerIndex + 1
        end
        setGameOver()
		Rule_Remove("MainRule")
    end

    --
    -- display progress ATI template
    --

    --display title
    ATI_Clear()
    local TitleRect = {0.5, 0.51, 0.5, 0.1}
    ATI_CreateParameters(1)
    ATI_AddString(0, "$8010")
    ATI_Display2D("progressTitle", TitleRect, 0)

    --display progress bar for each player
    playerIndex = 0
    local ATIRect = {0.5, 0.5, 0.5, 0.02}
    while (playerIndex < playerCount) do
        --setup parameters
        ATI_CreateParameters(RRPN_Parameters)

        local playerName = Player_GetName(playerIndex)
        ATI_AddWString(RRPI_PlayerName, playerName)

		local progress = Player_GetRU(playerIndex) / resourcesNeeded
        ATI_AddFloat(RRPI_PlayerProgress, progress)

        local playerColour = {1.0, 1.0, 1.0, 1.0}
        ATI_AddColour(RRPI_PlayerColour, playerColour)
        --actual display
        ATI_Display2D("playerProgress", ATIRect, 0)

		-- go to next player
        ATIRect[2] = ATIRect[2] - 0.025
		playerIndex = playerIndex+1
    end

	
end


