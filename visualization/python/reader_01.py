import pandas as pd

dd = pd.read_csv('../data/opendata.csv')

# dd = dd.query('region="Новосибирская область"')
dd = dd[dd['region'].str.contains("Новосибирск")]

# for k, r in dd.iterrows():
#     print(r['name'], r['region'], r['date'], r['value'])

print(set(dd.name))

for some_col in list(set(dd.name)):
    some_set = dd[dd['name'].str.contains(some_col)]

    # print(some_set)

    for e, row in some_set.iterrows():
        some_date = row['date'].split('-')
        print("[new Date({}, {}, {}), {}],".format(some_date[0], some_date[1], some_date[2], row['value']))


    exit()
