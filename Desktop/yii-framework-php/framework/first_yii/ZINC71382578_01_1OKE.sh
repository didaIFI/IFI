#!/bin/sh
tar -xvzf file10.tar.gz
/bin/bash autodock.sh autodocksuite-4.2.5.1-i86Linux2.tar.gz ZINC71382578_01_1OKE.dpf
zip DLG *_*_*.dlg
zip GLG *.glg 
zip ZINC71382578_01_1OKE *_*_*.dlg *.glg
tar jcf ZINC71382578_01_1OKE.tar.bz2 *_*_*.*
