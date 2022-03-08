# CSGOCasePriceCheck
PHP Script to check the prices of CSGO Cases

This is a small script to check the prices of (all available - Date 08-03-2022) cases and check them with Steam Market API. 
Take care to increase the sleep timer in case you're getting some 429: Too many requests from Steam Market, since it's kinda strange picky about how many requests it wants to take from an IP at once. Make sure to comment out the cases you don't need to reduce the number of requests.

Currently implemented:
✔️ All CS:GO Skin Cases
✔️ RMR 2020 Sticker Calsules
❌ All other Sticker Capsules


Script works for prices being shown in Euros and USD (with some changes, see comments).
